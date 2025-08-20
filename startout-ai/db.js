const mariadb = require('mariadb');
require('dotenv').config();

const pool = mariadb.createPool({
    host: process.env.DB_HOST || 'localhost',
    user: process.env.DB_USER || 'root',
    password: process.env.DB_PASSWORD || '12345',
    database: process.env.DB_NAME || 'startout_ai_db',
    connectionLimit: 5,
    acquireTimeout: 30000,
    connectTimeout: 30000,
    timeout: 30000
});

// Test connection
async function testConnection() {
    let conn;
    try {
        conn = await pool.getConnection();
        console.log('Database connected successfully');
        return true;
    } catch (error) {
        console.error('Database connection failed:', error);
        return false;
    } finally {
        if (conn) conn.release();
    }
}

module.exports = {
    pool,
    testConnection
};