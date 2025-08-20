const express = require('express');
const router = express.Router();
const multer = require('multer');
const path = require('path');
const { body, validationResult } = require('express-validator');
const authMiddleware = require('../middleware/authMiddleware');
const { pool } = require('../db');

// Configure multer for file uploads
const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'public/uploads/');
    },
    filename: function (req, file, cb) {
        cb(null, Date.now() + '-' + file.originalname);
    }
});

const upload = multer({ 
    storage: storage,
    limits: { fileSize: 5 * 1024 * 1024 }, // 5MB limit
    fileFilter: function (req, file, cb) {
        const filetypes = /jpeg|jpg|png|gif|webp/;
        const extname = filetypes.test(path.extname(file.originalname).toLowerCase());
        const mimetype = filetypes.test(file.mimetype);

        if (mimetype && extname) {
            return cb(null, true);
        } else {
            cb(new Error('Only image files are allowed'));
        }
    }
});

// Admin login routes
router.get('/login', (req, res) => {
    if (req.session.user) {
        return res.redirect('/admin/dashboard');
    }
    res.render('admin/login', { error: null });
});

router.post('/login', [
    body('username').notEmpty().withMessage('Username is required'),
    body('password').notEmpty().withMessage('Password is required')
], async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.render('admin/login', { 
            error: errors.array()[0].msg 
        });
    }

    const { username, password } = req.body;
    const result = await authMiddleware.login(username, password);

    if (result.success) {
        req.session.user = result.user;
        res.redirect('/admin/dashboard');
    } else {
        res.render('admin/login', { error: result.message });
    }
});

router.get('/logout', (req, res) => {
    req.session.destroy();
    res.redirect('/admin/login');
});

// Admin dashboard
router.get('/dashboard', authMiddleware.requireAuth, async (req, res) => {
    let conn;
    try {
        conn = await pool.getConnection();
        
        // Get counts for dashboard
        const [pagesCount, postsCount, servicesCount, testimonialsCount] = await Promise.all([
            conn.query('SELECT COUNT(*) as count FROM pages_content WHERE is_published = TRUE'),
            conn.query('SELECT COUNT(*) as count FROM blog_posts WHERE is_published = TRUE'),
            conn.query('SELECT COUNT(*) as count FROM services WHERE is_active = TRUE'),
            conn.query('SELECT COUNT(*) as count FROM testimonials WHERE is_approved = TRUE')
        ]);

        res.render('admin/dashboard', {
            user: req.session.user,
            counts: {
                pages: pagesCount[0].count,
                posts: postsCount[0].count,
                services: servicesCount[0].count,
                testimonials: testimonialsCount[0].count
            }
        });
    } catch (error) {
        console.error('Dashboard error:', error);
        res.render('admin/error', { message: 'Error loading dashboard' });
    } finally {
        if (conn) conn.release();
    }
});

// Pages management
router.get('/pages', authMiddleware.requireAuth, async (req, res) => {
    let conn;
    try {
        conn = await pool.getConnection();
        const pages = await conn.query(`
            SELECT pc.*, au1.username as created_by_name, au2.username as updated_by_name
            FROM pages_content pc
            LEFT JOIN admin_users au1 ON pc.created_by = au1.id
            LEFT JOIN admin_users au2 ON pc.updated_by = au2.id
            ORDER BY pc.updated_at DESC
        `);
        
        res.render('admin/pages/list', { 
            user: req.session.user, 
            pages: pages 
        });
    } catch (error) {
        console.error('Pages list error:', error);
        res.render('admin/error', { message: 'Error loading pages' });
    } finally {
        if (conn) conn.release();
    }
});

router.get('/pages/create', authMiddleware.requireAuth, (req, res) => {
    res.render('admin/pages/create', { 
        user: req.session.user, 
        page: {}, 
        errors: {} 
    });
});

router.post('/pages/create', authMiddleware.requireAuth, [
    body('page_slug').notEmpty().withMessage('Slug is required'),
    body('title').notEmpty().withMessage('Title is required'),
    body('content').notEmpty().withMessage('Content is required')
], async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.render('admin/pages/create', {
            user: req.session.user,
            page: req.body,
            errors: errors.mapped()
        });
    }

    let conn;
    try {
        conn = await pool.getConnection();
        await conn.query(`
            INSERT INTO pages_content 
            (page_slug, title, content, meta_description, meta_keywords, created_by, updated_by)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        `, [
            req.body.page_slug,
            req.body.title,
            req.body.content,
            req.body.meta_description,
            req.body.meta_keywords,
            req.session.user.id,
            req.session.user.id
        ]);

        req.flash('success', 'Page created successfully');
        res.redirect('/admin/pages');
    } catch (error) {
        console.error('Create page error:', error);
        if (error.code === 'ER_DUP_ENTRY') {
            res.render('admin/pages/create', {
                user: req.session.user,
                page: req.body,
                errors: { page_slug: { msg: 'Slug already exists' } }
            });
        } else {
            res.render('admin/error', { message: 'Error creating page' });
        }
    } finally {
        if (conn) conn.release();
    }
});

// Similar routes for edit, delete, and other CRUD operations for pages, blog posts, services, and testimonials

// Blog management routes
router.get('/blog', authMiddleware.requireAuth, async (req, res) => {
    // Implementation for blog list
});

router.get('/blog/create', authMiddleware.requireAuth, (req, res) => {
    // Implementation for blog create form
});

router.post('/blog/create', authMiddleware.requireAuth, upload.single('featured_image'), [
    // Validation and create logic
]);

// Services management routes
router.get('/services', authMiddleware.requireAuth, async (req, res) => {
    // Implementation for services list
});

// Testimonials management routes
router.get('/testimonials', authMiddleware.requireAuth, async (req, res) => {
    // Implementation for testimonials list
});

// Profile and settings
router.get('/profile', authMiddleware.requireAuth, (req, res) => {
    res.render('admin/profile', { 
        user: req.session.user, 
        message: null 
    });
});

router.post('/profile/change-password', authMiddleware.requireAuth, [
    body('current_password').notEmpty().withMessage('Current password is required'),
    body('new_password').isLength({ min: 6 }).withMessage('New password must be at least 6 characters'),
    body('confirm_password').custom((value, { req }) => {
        if (value !== req.body.new_password) {
            throw new Error('Passwords do not match');
        }
        return true;
    })
], async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.render('admin/profile', {
            user: req.session.user,
            message: { type: 'error', text: errors.array()[0].msg }
        });
    }

    const result = await authMiddleware.changePassword(
        req.session.user.id,
        req.body.current_password,
        req.body.new_password
    );

    res.render('admin/profile', {
        user: req.session.user,
        message: { 
            type: result.success ? 'success' : 'error', 
            text: result.message 
        }
    });
});

module.exports = router;