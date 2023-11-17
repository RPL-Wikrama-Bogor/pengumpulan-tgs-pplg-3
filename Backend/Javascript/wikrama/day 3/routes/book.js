const express = require('express')
const router = express.Router()
const {
    getBooks   
} = require('../controllers/BookController')

//route untuk menampilkan data
router.get('/', getBooks)

//route untuk mengirim data
router.post('/', )

router.get('/:id', (req, res) => {

})

//route untuk memperbaharui/update data
router.put('/:id', (req, res) => {
    res.write('PUT book code')
    res.end()
})

//route untuk menghapus data
router.delete('/:id', (req, res) => {
    res.write('DELETE book code')
    res.end()
})

module.exports = router