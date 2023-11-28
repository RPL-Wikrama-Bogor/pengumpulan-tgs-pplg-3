const express = require('express');
const app = express();
const port = 5000; 

app.get('/', (req, res) => {
  res.send('Selamat datang di aplikasi Express!');
  res.end();
});

app.get('/about', (req, res) => {
    res.send('Ini adalah halaman "About"');
    res.end();
  });

app.listen(port, () => {
  console.log(`Aplikasi berjalan di http://localhost:${port}`);
});
