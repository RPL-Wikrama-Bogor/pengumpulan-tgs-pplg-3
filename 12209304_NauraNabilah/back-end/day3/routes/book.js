const express = require('express')
const router = express.Router()
const {
    getBooks
} = require ('../controllers/BookController')

router.get('/', getBooks)

router.post('/',)


//route untuk menampilkan data
router.get('/', (req, res) => {
    res.write('GET book code')
    res.end()
})
//route untuk mengirim data
router.post('/:id', (req, res) => {
    res.write('POST book code')
    res.end()
})
//route untuk memperbarui/update data
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