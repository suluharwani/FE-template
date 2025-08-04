const express = require('express');
const router = express.Router();
const pageController = require('../controllers/pageController');

// Static page routes
router.get('/', pageController.getHome);
router.get('/aboutUs', pageController.getAboutUs);
router.get('/career', pageController.getCareer);
router.get('/contactUs', pageController.getContactUs);
router.get('/joinUs', pageController.getJoinUs);
router.get('/page', pageController.getPage);
router.get('/service', pageController.getService);
router.get('/service/data-ai', pageController.getServiceDataAI);
router.get('/service/data-security', pageController.getServiceDataSecurity);
router.get('/service/moderation', pageController.getServiceModeration);
router.get('/service/tab', pageController.getServiceTab);

module.exports = router;