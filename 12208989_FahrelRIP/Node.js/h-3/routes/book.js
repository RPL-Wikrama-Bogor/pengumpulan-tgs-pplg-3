const express = require('express')
const router = express.Router()
const {
    getBooks
} = require('../controller/BookController')

router.get('/', getBooks)

//route untuk mengirim data 
router.post('/', (req, res) => 
{
    res.write('POST book code')
    res.end()
})

// router.get('/:id', (req, res) => 
// {   
    
// })

//route untuk mengubah data
router.put('/:id', (req, res) => 
{
    res.write('PUT book code')
    res.end()
})

//route untuk menghapus data
router.delete('/:id', (req, res) => 
{
    res.write('DELETE book code')
    res.end()
})

module.exports = router
