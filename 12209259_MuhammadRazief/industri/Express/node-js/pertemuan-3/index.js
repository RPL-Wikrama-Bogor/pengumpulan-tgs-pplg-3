const express = require('express')
const mysql = require('mysql2')
const bookRoute = require('./routes/book')
const authRoute = require('./routes/auth')
const authorRoute = require('./routes/author')
const dbConfig = require('./config/database')
const pool = mysql.createPool(dbConfig)

pool.on('error', (err) => {
    console.log(err)
})

const app = express()
const PORT = 3000

app.use(express.json())
app.use(express.urlencoded({
    extended: true
}))

app.get('/', (req, res) => {
    res.write('Hello world')
    res.end()
})

app.use('/auth', authRoute)
app.use('/book', bookRoute)
app.use('/author', authorRoute)

app.listen(PORT, () => {
    console.log(`Server berjalan di http://localhost:${PORT}`)
})