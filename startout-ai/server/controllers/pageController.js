const path = require('path');

const pageController = {
    getHome: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/index.html'));
    },
    getAboutUs: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/aboutUs.html'));
    },
    getCareer: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/career.html'));
    },
    getContactUs: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/contactUs.html'));
    },
    getJoinUs: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/joinUs.html'));
    },
    getPage: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/page.html'));
    },
    getService: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/service.html'));
    },
    getServiceDataAI: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/service-data-ai.html'));
    },
    getServiceDataSecurity: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/service-data-security.html'));
    },
    getServiceModeration: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/service-moderation.html'));
    },
    getServiceTab: (req, res) => {
        res.sendFile(path.join(__dirname, '../../public/views/service-tab.html'));
    }
};

module.exports = pageController;