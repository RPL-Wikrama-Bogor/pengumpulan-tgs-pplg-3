const express =  require('express')
const router = express.Router()
const {
    getBooks
} = require('../controllers/bookController')


//router untuk menampilkan data
router.get('/', getBooks)


//router untuk mengirim data
router.post('/',)


//route untuk menampilkan data
router.get('/:id', (req,res) => {

})


//route untuk menambahkan data
router.put('/:id',(req,res) => {
    res.write('input book code')
    res.end()
})

router.delete('/:id', (req,res) => {
    res.write('delete book code')
    res.end()
})

module.exports = router