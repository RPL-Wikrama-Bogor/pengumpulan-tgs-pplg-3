const express = require('express')
const router = express.Router()

router.get('/', (req, res) => 
{
    res.write('GET book code')
    res.end()
})

router.post('/', (req, res) => 
{
    res.write('POST book code')
    res.end()
})

router.put('/', (req, res) => 
{
    res.write('PUT book code')
    res.end()
})

router.delete('/', (req, res) => 
{
    res.write('DELETE book code')
    res.end()
})

module.exports = router