const express = require('express')
const bookRoute = require('../routes/book')
const authRoute = require('../routes/auth')
const jwth = require('jsonwebtoken')
const accessTokenSecret = '2023-wikrama-exp'

const app = express()
app.use(express.json())
app.use(
    express.urlencoded({
        extended: true
    })
)

const authenticateJWT = (req, res, next) => {
    const authHeader = req.headers.authorization

    if (!authHeader) {
        return res.status(403).json({
            'massage' : 'Unauthorized'
        })
    }

    const token = authHeader.split('')[1]

    jwt.verify(token, accessTokenSecret, (err, user) => {
        if (err) {
            return res.status(403).json({
                'massage' : 'Unauthorized'
            })
        }

        next()
    })
}

module.exports = authenticateJWT