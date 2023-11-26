const express = require('express')
const router = express.Router()

//Router
router.get('/', (req, res) => {
    res.write('GET author code')
    res.end () 
})

//Router
router.post('/', (req, res) => {
    res.write('POST author code')
    res.end ()
})

//Router Perbarui data
router.put('/', (req, res) => {
    res.write('PUT author code')
    res.end ()
})

//Router Hapus data
router.delete('/', (req, res) => {
    res.write('DELETE author code')
    res.end ()
})

module.exports = router