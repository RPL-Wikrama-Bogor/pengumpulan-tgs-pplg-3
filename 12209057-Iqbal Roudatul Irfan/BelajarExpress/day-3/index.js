const express = require('express');
const mysql = require('mysql2');
const bookRoute = require('./routes/book');
const authRoute = require('./routes/auth');
const authorRoute = require('./routes/author');
const dbConfig = require('./config/database');
const authenticateJWT = require('./middleware/auth');
const cors = require('cors');

const pool = mysql.createPool(dbConfig);

pool.on('error', (err) => {
    console.log(err);
});

const app = express();
const PORT = 3000;

// Middleware
app.use(express.json());
app.use(express.urlencoded({
    extended: true
}));
app.use(cors());

// Routes
app.get('/contohparameter/:username/:jurusan/:kelas', (req, res) => {
    res.json(req.params);
});

app.get('/contohparam', (req, res) => {
    res.json(req.query);
});

app.get('/', async (req, res) => {
    res.write('Hello world');

    try {
        const result = await pool.query('SELECT * FROM books');
        res.json(result);
    } catch (error) {
        console.error('Error:', error);
        res.status(500).json({ error: 'Internal Server Error' });
    }
});

// Routes using middleware
app.use('/book', authenticateJWT, bookRoute);
app.use('/author', authorRoute);
app.use('/auth', authRoute);

// Server listening
app.listen(PORT, () => {
    console.log(`Server berjalan di http://localhost:${PORT}`);
});
