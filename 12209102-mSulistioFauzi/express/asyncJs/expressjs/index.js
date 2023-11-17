const express = require('express')
const app = express()

const port = 3000;

app.get('/', (req, res) => {
    res.write('coba express')
    res.end()
})

app.get('/about', (req, res) => {
    res.write('about')
    res.end()
})

app.get
app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`)
})