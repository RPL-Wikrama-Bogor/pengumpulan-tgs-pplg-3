const express = require('express') 
const bookRouter = require('./routes/book-route')
const authorRouter = require('./routes/author-route')
const authRouter = require('./routes/auth-router')
const jwt = require('jsonwebtoken')
const accessTokenSecret  = '2023-wikramA-exp'
const cors = require('cors')
const authenticateJWT = require('./middleware/auth')

const app = express()
app.use(express.json())
app.use(express.urlencoded({
    extended: true,
    })
)

const PORT = 3000

app.use(cors())
app.use('/auth', authRouter)    
app.use('/book', authenticateJWT,bookRouter)    
app.use('/author', authorRouter)
app.get('/book/:id/:bookname/:year', (req, res) => {
    res.send(req.params)
})

app.get('/filter', (req, res) => {
    res.send(req.query)
})

app.listen(PORT, () => console.log(`Server ini berjalan di http://localhost:${PORT}`))