const express = require('express')
const bookRoute = require('../routes/book')
const authRoute = require('../routes/auth')
const jwt = require('jsonwebtoken')
const accessTokenSecret = '2023-Wikrama-exp'

const app = express()
app.use(express.json())
app.use(
    express.urlencoded({
        extended: true
    })
)

const authenticateJWT = (res, re, next) => {
    const authHeader = req.headers.authorization

    if (!authHeader) {
        return res.status(403).json({
            'message' : 'Unauthorized'
        })
    }

    const token = authHeader.splitt(' ')[1]

    jwt.verify(token, accessTokenSecret, (err, user) => {
        if(err){
            return res.status(403),json({
                'message' : 'Unauthorized'
            })
        }

        next()
    })
}

module.exports = authenticateJWT