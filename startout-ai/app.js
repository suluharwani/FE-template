const express = require('express');
const path = require('path');
const pageRoutes = require('./server/routes/pageRoutes');

const app = express();
const PORT = process.env.PORT || 3000;

// Set up static files
app.use(express.static(path.join(__dirname, 'public')));

// Set view engine (for future dynamic content)
app.set('views', path.join(__dirname, 'public/views'));
app.set('view engine', 'html');

// Use routes
app.use('/', pageRoutes);

// Start server
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});