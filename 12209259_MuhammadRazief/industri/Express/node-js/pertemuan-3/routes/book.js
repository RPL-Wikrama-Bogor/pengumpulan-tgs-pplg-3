const express = require('express')
const route = express.Router()
const {
    getBooks,
    getBook,
    addBook,
    updateBook,
    deleteBook
} = require('../controllers/BookController')

//route untuk menampilkan data
route.get('/', getBooks)

//route untuk mengirim data
route.post('/', addBook)

route.get('/:id', getBook)

//route untuk memperbaharui/update data
route.put('/:id', updateBook)

//route untuk menghapus data
route.delete('/:id', deleteBook)

module.exports = route