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

router.get('/search', search)

router.get('/sort', sortBy)


router.get('/', getBooks)

router.post('/', addBook)

router.get('/:id', getBook)

router.put('/:id', updateBook)

router.delete('/:id', deleteBook)

module.exports = router