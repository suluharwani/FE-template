const bcrypt = require('bcryptjs');
const { pool } = require('./db');

const authMiddleware = {
    // Check if user is authenticated
    requireAuth: (req, res, next) => {
        if (req.session && req.session.user) {
            next();
        } else {
            res.redirect('/admin/login');
        }
    },

    // Check if user has specific role
    requireRole: (role) => {
        return (req, res, next) => {
            if (req.session && req.session.user && req.session.user.role === role) {
                next();
            } else {
                res.status(403).render('admin/error', { 
                    message: 'Access denied. Insufficient permissions.' 
                });
            }
        };
    },

    // Login function
    login: async (username, password) => {
        let conn;
        try {
            conn = await pool.getConnection();
            const rows = await conn.query(
                'SELECT * FROM admin_users WHERE username = ? AND is_active = TRUE',
                [username]
            );
            
            if (rows.length === 0) {
                return { success: false, message: 'User not found' };
            }

            const user = rows[0];
            const isPasswordValid = await bcrypt.compare(password, user.password_hash);

            if (!isPasswordValid) {
                return { success: false, message: 'Invalid password' };
            }

            // Remove password from user object
            const { password_hash, ...userWithoutPassword } = user;
            return { success: true, user: userWithoutPassword };

        } catch (error) {
            console.error('Login error:', error);
            return { success: false, message: 'Server error' };
        } finally {
            if (conn) conn.release();
        }
    },

    // Change password
    changePassword: async (userId, currentPassword, newPassword) => {
        let conn;
        try {
            conn = await pool.getConnection();
            
            // Verify current password
            const userRows = await conn.query(
                'SELECT password_hash FROM admin_users WHERE id = ?',
                [userId]
            );
            
            if (userRows.length === 0) {
                return { success: false, message: 'User not found' };
            }

            const isCurrentPasswordValid = await bcrypt.compare(currentPassword, userRows[0].password_hash);
            if (!isCurrentPasswordValid) {
                return { success: false, message: 'Current password is incorrect' };
            }

            // Hash new password
            const hashedPassword = await bcrypt.hash(newPassword, 10);
            
            // Update password
            await conn.query(
                'UPDATE admin_users SET password_hash = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?',
                [hashedPassword, userId]
            );

            return { success: true, message: 'Password updated successfully' };

        } catch (error) {
            console.error('Change password error:', error);
            return { success: false, message: 'Server error' };
        } finally {
            if (conn) conn.release();
        }
    }
};

module.exports = authMiddleware;