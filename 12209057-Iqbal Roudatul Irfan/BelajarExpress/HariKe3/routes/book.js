const express = require('express');
const router = express.Router();
const {
    getBooks,
    getBook
} = require('../controllers/BookController');

router.get('/', getBooks);

router.post('/', (req, res) => {
    res.write('POST book code');
    res.end();
});

router.get('/:id', getBook);

router.put('/:id', (req, res) => {
    res.write('PUT book by ID code');
    res.end();
});

router.delete('/:id', (req, res) => {
    res.write('DELETE book by ID code');
    res.end();
});

module.exports = router;
