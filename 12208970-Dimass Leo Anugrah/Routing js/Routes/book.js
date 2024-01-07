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


//contoh akses http://localhost400/search?order==mau cari apa
router.get('/sort', sortBy)

//contoh akses http://localhost400/search?keyword==mau cari apa
router.get('/search', search)

//Router menampilkan data
router.get('/', getBooks)

//Router mengirim data
router.post('/', addBook)

//Router untuk menampilkan data berdasarkann data buku
router.get('/:id', getBook)

//Router Perbarui data berdasarkan id data buku
router.put('/:id', updateBook)


//Router Hapus data
router.delete('/:id', deleteBook)

module.exports = router