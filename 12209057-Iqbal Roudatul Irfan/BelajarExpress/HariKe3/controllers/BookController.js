const mysql = require('mysql2');
const koneksi = require('../config/database');
const { responseSuccess } = require('./traits/ApiResponse'); // Correct the path to ApiResponse

const pool = mysql.createPool(koneksi);

const responseNotFound = (res) => {
    res.status(404).json({ error: 'Data not found' });
};

const getBooks = (req, res) => {
    const query = "SELECT * FROM books";

    pool.getConnection((err, connection) => {
        if (err) {
            console.error(err);
            responseNotFound(res);
        } else {
            connection.query(query, (err, results) => {
                connection.release();
                if (err) {
                    console.error(err);
                    responseNotFound(res);
                } else {
                    responseSuccess(res, results, 'Books successfully fetched');
                }
            });
        }
    });
};

const getBook = (req, res) => {
    const id = req.params.id;
    const query = `SELECT * FROM books WHERE id=${id}`;

    pool.getConnection((err, connection) => {
        if (err) {
            console.error(err);
            responseNotFound(res);
        } else {
            connection.query(query, (err, results) => {
                connection.release();
                if (err) {
                    console.error(err);
                    responseNotFound(res);
                } else {
                    if (results.length === 0) {
                        responseNotFound(res);
                    } else {
                        responseSuccess(res, results, 'Book detail successfully fetched');
                    }
                }
            });
        }
    });
};

module.exports = {
    getBooks,
    getBook
};
