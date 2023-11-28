const express = require('express');
const mysql = require('mysql2');
const bookRoute = require('./routes/book');
const authorRoute = require('./routes/author');
const koneksi = require('./config/database');
const pool = mysql.createPool(koneksi);

const app = express();
const port = 3000;

app.use(express.json());
app.use(express.urlencoded({
    extended: true
}));

app.get('/', (req, res) => {
    res.send('Hello World');
});

app.use('/book', bookRoute);
app.use('/author', authorRoute);

app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
