const express = require('express')
const route = express.Router()
const {
    getBooks,
    getBook
} = require('../controllers/BookController')

//route untuk menampilkan data
route.get('/', getBooks)

//route untuk mengirim data
route.post('/', )

route.get('/:id', getBook)

//route untuk memperbaharui/update data
route.put('/:id', (req, res) => {
    res.write('PUT book code')
    res.end()
})

//route untuk menghapus data
route.delete('/:id', (req, res) => {
    res.write('DELETE book code')
    res.end()
})

module.exports = route