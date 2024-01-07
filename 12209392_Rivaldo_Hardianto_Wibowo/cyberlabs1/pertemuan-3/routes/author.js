const express =  require('express')
const router = express.Router()

router.get('/', (req,res) => {
    res.write('get author code')
    res.end()
})

router.post('/', (req,res) => {
    res.write('post author code')
    res.end()
})

router.put('/', (req,res) => {
    res.write('put author code')
    res.end()
})

router.delete('/', (req,res) => {
    res.write('delete author code')
    res.end()
})
module.exports = router
