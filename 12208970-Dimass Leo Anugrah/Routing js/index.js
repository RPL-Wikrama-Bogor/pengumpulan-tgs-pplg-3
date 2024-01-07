const express = require('express')
const mysql = require('mysql2')
const bookRoute = require('./Routes/book')
const authorRoute = require('./Routes/author')
const authRoute = require('./Routes/auth')
const dbConfig = require('./config/database')
const pool = mysql.createPool(dbConfig)
const authenticateJWT =require('./middleware/auth')
const cors = require('cors')

pool.on('error', (err) => {
    console.log(err)
})

const app = express()
const PORT = 4000

app.use(cors())
app.use(express.json())
app.use(express.urlencoded({
    extended: true
}))

//Membuar parameter harus di awalai dengan : di awal
app.get('/contohparameter/:username/:jurusan/:kelas', (req, res) => {
    res.json(req.params)
})

app.get('/contohparam', (req, res) => {
    res.json(req.query)
})

app.get('/', (req, res) => {
    res.write('hello world')
    res.end()
})

app.use('/book', authenticateJWT, bookRoute)
app.use('/auth', authRoute)
app.use('/author', authorRoute)

app.listen(PORT, () => {
    console.log(`Server berjalan di http://localhost:${PORT}`)
})