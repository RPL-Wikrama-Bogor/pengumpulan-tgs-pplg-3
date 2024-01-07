const dbConfig = require('../config/database')
const mysql = require('mysql2')
const jwt = require('jsonwebtoken') //untuk memanggil jwt
const pool = mysql.createPool(dbConfig)
const {
    responseAuthSuccess,
    responseFailValidate
} = require('../traits/ApiResponse')
const { connect } = require('../routes/book')
const { pool } = require('./mysql2/typings/mysql/lib/Pool')

pool.on('error', (err) => {
    console.error(err)
})

const accesssTokenSecret = '2023-Wikrama-exp'

const register = (req, res) => {
    const data = {
        email: req.body.email,
        username: req.body.username,
        password: req.body.password
    }

    pool.getConnection((err, connection) => {
        if(err) throw err
        connection.query(`SELECT * FROM users WHERE email='${data.email}' OR 
        username='${data.username}'`, (err,results) => {
            if(err) throw err 

            if(results.length > 0) {
                res.status(403).json({
                    message: 'Email/Username sudah digunakan'
                })

                return 
            }
        })
    })

    if(data.email == null || data.username == null || data.password == null) {
        responseFailValidate(res, 'Email/Username/Password wajib diisi')
    } else {
        const query_3 = 'INSERT INTO users SET ?'

        pool.getConnection((err, connection) => {
            if(err) throw err

            connection.query(query_3, [data], (err, results) => {
                if(err) throw err

                if(results.affectedRows >= 1) {
                    const token = jwt.sign({
                        email: data.email, 
                        username: data.username
                    }, accesssTokenSecret)

                    responseAuthSuccess(res, token, 'Register successfully', {
                        email: data.email,
                        username: data.username
                    })

                    return
                }

                res.status(500).json({
                    message: 'Failed creating user'
                })
            })

            connection.release()
        })
    }
}

module.exports = {
    register
}