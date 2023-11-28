const mysql = require('mysql2')
const dbconfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../helper/helper')
const pool = mysql.createPool(dbconfig)

const getBook = (res,req) =>{
    const query = "SELECT * FROM book"

    pool.getConnection((err, connection) => {
        if (err) throw err 
            
        connection.query(query, (err, results) => {
            if (err) throw err

            responseSuccess(res, results, 'Book succesfully fetced')
        })
        
        connection.release()
    })
}

module.exports = {
    getBook
}