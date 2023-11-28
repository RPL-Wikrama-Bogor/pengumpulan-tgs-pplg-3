const express = require('express')
const router = express.Router()

//menampilkan data
router.get('/', (req,res) => {
    res.write('GET AUTHOR CODE')
    res.end()
})

//mengirim data 
router.post('/', (req,res) => {
    res.write('POST AUTHOR CODE')
    res.end()
})

//memperbarui/update data 
router.put('/', (req,res) => {
    res.write('PUT AUTHOR CODE')
    res.end()
})

//menghapus data 
router.delete('/', (req,res) => {
    res.write('DELETE AUTHOR CODE')
    res.end()
})

module.exports = router