const express = require('express')
const router = express.Router()
const {
    getBooks   
} = require('../controllers/BookController')

router.get('/', getBooks)

router.post('/', )

router.get('/:id', (req, res) => {

})


router.put('/:id', (req, res) => {
    res.write('PUT book code')
    res.end()
})


router.delete('/:id', (req, res) => {
    res.write('DELETE book code')
    res.end()
})

module.exports = router