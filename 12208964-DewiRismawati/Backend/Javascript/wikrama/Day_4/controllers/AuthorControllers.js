const mysql = require('mysql2')
const dbConfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../traits/ApiResponse')
const { response } = require('express')
const { connect } = require('../routes/author')//
const pool = mysql.createPool(dbConfig)

const getAuthor = (req, res) => {
    const query = "SELECT * FROM author"

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err
            
            responseSuccess(res, results, 'Author succesfully fetched')
        })

        connection.release()
    })
}

const getAuthors = (req, res) => {
    const id = req.params.id

    const query = `SELECT * FROM author WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err
        connection.query(query, (err,results) => {
            if
            (err) throw err

            if(results.lenght == 0){
                responseNotFound(res)
                return
            }
            responseSuccess(res, results, 'Author succesfully fetched') //respon diabil dari ApiRespons
        })
        connection.release()
    })
}

const addAuthors = (req, res) => { //nama ini harus sama dengan di database// 
    const data = {
        nama: req.body.nama,
        email: req.body.email,
        alamat: req.body.alamat,
        umur: req.body.umur,
        media_sosial: req.body.media_sosial
    }

    const query = 'INSERT INTO author SET ?'

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err, results) => {
            if(err) throw err

            responseSuccess(res, results, 'Author successfully added')
        })
        connection.release()
    })
}

const updateAuthors = (req, res) => {
    const id = req.params.id

    const data = {
        nama: req.body.nama,
        email: req.body.email,
        alamat: req.body.alamat,
        umur: req.body.umur,
        media_sosial: req.body.media_sosial
    }

    const query = `UPDATE author SET ? WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, [data], (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0){ //buat datanya ke akses apa engga
                responseNotFound(res)
                return
            }
            responseSuccess(res, results, 'Author succesfully updated')
        })
        connection.release()
    })
}

const deleteAuthors = (req, res) => {
    const id = req.params.id

    const query = `DELETE FROM author WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, results) => {
            if(err) throw err

            if(results.affectedRows == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, results, 'Author sucessfuly deteled')
        })
        connection.release()
    })
}

module.exports = {
    getAuthor,
    getAuthors,
    addAuthors,
    updateAuthors,
    deleteAuthors
}