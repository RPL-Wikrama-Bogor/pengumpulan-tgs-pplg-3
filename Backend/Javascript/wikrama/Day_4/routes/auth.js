const express = require('express')
const {
    register,
    login,
    getAuth
} = require('../controllers/AuthController')

const router =  express.Router()

router.post('/register', register)
router.post('/login', login)

module.exports = router