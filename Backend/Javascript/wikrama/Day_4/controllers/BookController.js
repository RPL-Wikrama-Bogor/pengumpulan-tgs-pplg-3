const mysql = require('mysql2')
const dbConfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../traits/ApiResponse')
// const { response } = require('express')
// const { connect } = require('../routes/book')
const pool = mysql.createPool(dbConfig)

// contoh akses ->'http://localhost:3001/search?keyword=mau cari apa '
const search = (req, res) => {
    const keyword = req.query.keyword

    //untuk memcari salah satu nama

    const query = `SELECT * FROM books WHERE nama LIKE '%${keyword}%`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query,(err, results) => {
            if(err) throw err

            if(results.lenght == 0){
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
    const orderBy = req.query.orderBy

    //DESC/ ASC
    const query=` SELECT * FROM books ORDER BY nama ${orderBy}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(results.lenght == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Book successfully fetched')
        })  

        connection.release()
    })
}

const getBooks = (req, res) => {
    const query = "SELECT * FROM books"

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

    const query = `SELECT * FROM books WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err
        connection.query(query, (err,results) => {
            if
            (err) throw err

            if(results.lenght == 0){
                responseNotFound(res)
                return
            }
            responseSuccess(res, results, 'Book succesfully fetched') //respon diabil dari ApiRespons
        })
        connection.release()
    })
}

const addBook = (req, res) => { //nama ini harus sama dengan di database// 
    const data = {
        nama: req.body.nama,
        author: req.body.author,
        publisher: req.body.publisher,
        year: req.body.year,
        page_count: req.body.page_count
    }

    const query = 'INSERT INTO books SET ?'

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

    const data = {
        nama: req.body.nama,
        author: req.body.author,
        publisher: req.body.publisher,
        year: req.body.year,
        page_count: req.body.page_count
    }

    const query = `UPDATE books SET ? WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0){ //buat datanya ke akses apa engga
                responseNotFound(res)
                return
            }
            responseSuccess(res, results, 'Book succesfully updated')
        })
        connection.release()
    })
}

const deleteBook = (req, res) => {
    const id = req.params.id

    const query = `DELETE FROM books WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Book sucessfuly deteled')
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