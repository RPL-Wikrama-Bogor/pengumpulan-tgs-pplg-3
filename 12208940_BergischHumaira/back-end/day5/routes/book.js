const express = require('express')
const router = express.Router() //router ini bagian dari express
const {
    getBooks,
    getBook,
    addBook,
    updateBook,
    deleteBook,
    search,
    sortBy
} = require ('../controllers/BookController') 


//contoh akses https://localhost:3000/search?keyword=mau cari apa
router.get('./search', search)

//contoh akses https://localhost:3000/search?order?=DESC / ASC
router.get('/sort', sortBy)

//route untuk menampilkan data
router.get('/', getBooks)

//route untuk mengirim data
router.post('/', addBook)

// route untuk menampilkan data berdasarkan id buku
router.get('/:id', getBook)

//route untuk memperbaharui/update data berdasarkan id buku
router.put('/:id', updateBook)

//route untuk menghapus data berdasarkan id buku
router.delete('/:id', deleteBook)

module.exports = router