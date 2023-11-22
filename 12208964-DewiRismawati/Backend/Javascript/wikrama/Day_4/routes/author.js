const express = require('express')
const router = express.Router()
const {
    getAuthor,
    getAuthors,
    addAuthors,
    updateAuthors,
    deleteAuthors
} = require('../controllers/AuthorControllers')

router.get('/', getAuthor)
router.get('/:id', getAuthors)
router.post('/', addAuthors)
router.put('/:id', updateAuthors)
router.delete('/:id', deleteAuthors)
// const express = require('express')
// const router = express.Router()

// router.get('/', (req, res) => {
//     res.write('GET author code')
//     res.end()
// })

// router.post('/', (req, res) => {
//     res.write('POST author code')
//     res.end()
// })

// router.put('/', (req, res) => {
//     res.write('PUT author code')
//     res.end()
// })

// router.delete('/', (req, res) => {
//     res.write('DELETE author code')
//     res.end()
// })

module.exports = router