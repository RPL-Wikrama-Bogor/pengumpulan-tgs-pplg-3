const express = require("express")
const router = express.Router()
const bookController = require('../controller/book-controller')

//search?keyword=mau
router.get('/search', bookController.search)
router.get('/', bookController.getBooks)
router.get('/:id', bookController.getBook)
router.post('/', bookController.addBook)
router.put('/:id', bookController.editBook)
router.delete('/:id', bookController.deleteBook)
//search?order=DESC / ASC
router.get('/sort', bookController.sortBy)

module.exports = router