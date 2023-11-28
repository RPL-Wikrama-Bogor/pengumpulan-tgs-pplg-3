const express =  require('express')
const router = express.Router()
const {
    getAuthors,
    getAuthor,
    addAuthor,
    updateAuthor,
    deleteAuthor
} = require('../controllers/authorController')
const { getBook } = require('../controllers/bookController')

//route untuk menampilkan data pada database
router.get('/', getAuthors)

router.post('/', addAuthor)

//route route untuk menampilkan data berdasarkan id author
router.get('/:id', getAuthor)


router.put('/:id', updateAuthor)

router.delete('/:id', deleteAuthor)
module.exports = router
