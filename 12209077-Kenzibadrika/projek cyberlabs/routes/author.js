const express = require('express')
const router = express.Router()
const {
    getAuthors,
    getAuthor,
    addAuthor,
    updateAuthor,
    deleteAuthor
} = require('../controllers/Authorcontroller')

router.get('/', getAuthors)

router.post('/', addAuthor)

router.get('/:id', getAuthor)

router.put('/:id', updateAuthor)

router.delete('/:id', deleteAuthor)

module.exports = router