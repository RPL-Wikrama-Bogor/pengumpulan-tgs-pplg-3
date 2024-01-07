const express = require('express')
const router = express.Router()
const {
    getBooks,
    getBook,
    addBook,
    updateBook,
    deleteBook,
    search,
    sortBy
} = require('../controllers/BookController')

//contoh akses http://localhost:3000/search?keyword= mau cari apa
router.get('/search', search)

//contoh akses http://localhost:3000/search?order=DESC / ACS
router.get('/sort', sortBy)

//route untuk menampilkan data
router.get('/', getBooks)

//route untuk mengirim data
router.post('/', addBook)

//route untuk menampilkan data berdasarkan id book
router.get('/:id', getBook)

//route untuk memperbaharui/update data berdasarkan id book 
router.put('/:id', updateBook)

//route untuk menghapus data
router.delete('/:id', deleteBook)

module.exports = router