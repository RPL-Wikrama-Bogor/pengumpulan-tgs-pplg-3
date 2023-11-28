const mysql = require('mysql2')
const dbConfig = require('../config/database')
const pool = mysql.createPool(dbConfig)

const {
    responseNotFound,
    responseSuccess,
} = require('../traits/ApiResponse')


const getBooks = (req, res) => {
    const query = "SELECT * FROM Books"

    pool.getConnection((err, connection) => {
        if (err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err
            
            responseSuccess(res, results, 'Book succesfully fetched')
        })
        connection.release()
    })
}

const getBook = (req, res) => {
    const id = req.params.id
    
    const query = `SELECT * FROM Books WHERE id=${id}`
    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if(results.length == 0){
                responseNotFound(res)
                return
            }
            responseSuccess(res,results,'Book successfully fetched')
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
    const query = `INSERT INTO Books SET ?`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err, results) => {
            if(err) throw err
            responseSuccess(res, results, 'Book successfully added')
        })

        connection.release()
    })
}

const updateBook = (req,res) => {
    const id = req.params.id

    const data = {
        nama: req.body.nama,
        author: req.body.author,
        publisher: req.body.publisher,
        year: req.body.year,
        page_count: req.body.page_count   
    }

    const query = `UPDATE Books SET ? WHERE id=${id}`
    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err,results) => {
            if(err) throw err

            if(results.affectedRows == 0){
                responseNotFound(res)
                return
            }
            responseSuccess(res,results, 'Book succesfully updated')
        })
        connection.release()
    })
    
}

const deleteBook = (req,res)=>{
    const id = req.params.id

    const query = `DELETE FROM Books WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0){
                responseNotFound(res)
                return
            }
            responseSuccess(res,results, 'Book succesfully deleted')
        })
        connection.release()
    })
}
module.exports = {
    getBooks,
    getBook,
    addBook,
    updateBook,
    deleteBook
}