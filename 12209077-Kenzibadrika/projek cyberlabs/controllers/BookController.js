const mysql = require('mysql2')
const dbConfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../traits/ApiResponse')
const pool = mysql.createPool(dbConfig)

//contoh akses http://localhost:3000/search?keyword=mau cari apa
const search = (req, res) => {
    const keyword = req.query.keyword

    const query = `SELECT * FROM book WHERE nama LIKE '%${keyword}%`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if (results.length == 0) {
                return res.json({
                    message : 'Data tidak ditemukan'
                })
            }

            responseSuccess(res, results, 'Book successfully fetched')
        })

        connection.release()
    })
}

const sortBy = (req, res) => {
    const orderBy = req.query.order

    //DESC /ASC
    const query = `SELECT * FROM book ORDER BY nama ${orderBy}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err
            if (results.length == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Book successfully fetched')
        })

        connection.release()
    })
}

const getBooks = (req, res) => {
    const query = "SELECT * FROM book"

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err
            
            responseSuccess(res, results, 'Books succesfully fetched')
        })

        connection.release()
    })
}

const getBook = (req, res) => {
    const id = req.params.id

    const query = `SELECT * FROM book WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if (results.length == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Book successfully fetched')
        })

        connection.release()
    })
}

const addBook = (req, res) => {
    const data = {
        nama: req.body.nama,
        author: req.body.author,
        publisher: req.body.publisher,
        year: req.body.year,
        page_count: req.body.page_count
    }

    const query = 'INSERT INTO book SET ?'

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err, results) => {
            if(err) throw err

            responseSuccess(res, results, 'Book successfully added')
        })

        connection.release()
    })
}

const updateBook = (req, res) => {
    const id = req.params.id

    const data ={
        nama: req.body.nama,
        author: req.body.author,
        publisher: req.body.publisher,
        year: req.body.year,
        page_count: req.body.page_count
    }

    const query = `UPDATE book SET ? WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0){
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Book succcessully updated')
        })

        connection.release()
    })
}

const deleteBook = (req, res) => {
    const id = req.params.id

    const query = `DELETE FROM book WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0){
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Book succcessully Delete')
        })

        connection.release()
    })
}

module.exports = {
    getBooks,
    getBook,
    addBook, 
    updateBook,
    deleteBook, 
    search,
    sortBy
}