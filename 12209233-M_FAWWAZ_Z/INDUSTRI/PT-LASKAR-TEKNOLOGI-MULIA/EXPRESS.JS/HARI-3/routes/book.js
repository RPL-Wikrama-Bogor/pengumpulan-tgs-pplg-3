const express = require('express')

const route = express.Router()

const {
    getBooks,
    getBook,
    addBook,
    updateBook,
    deleteBook,
    search,
    sortBy
} = require('../controllers/BookController')
const router = require('./auth')

//sort By
// 'http://localhost:3000/search?order=mau cari apa'
route.get('/sort', sortBy)

//search
// 'http://localhost:3000/search?keyword=mau cari apa'
route.get('/search', search)

//Route untuk menampilkan data
route.get('/', getBooks) 

//Route untuk mengirim data
route.post('/', addBook)

route.get('/:id', getBook)

//Route untuk memperabrui data / update data
route.put('/:id', updateBook)
//Route untuk menghapus data
route.delete('/:id', deleteBook)

module.exports = route