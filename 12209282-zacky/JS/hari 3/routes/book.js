const express = require('express')
const router = express.Router()
const {
    getbook
} = require('../controller/BookController')

// //menampilkan data
// router.get('/', getbook)

// //mengirim data
// router.post('/',)

router.get('/:id', (req,res) => {
    
})

//memperbarui/update data
router.put('/:id', (req,res) => {
    res.write('PUT BOOK CODE')
    res.end()
})

//menghapus data
router.delete('/:id', (req,res)=> {
    res.write('DELETE BOOK CODE')
    res.end()
})

module.exports = router