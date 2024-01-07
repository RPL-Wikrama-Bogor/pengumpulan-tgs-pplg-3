const http = require('http');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
        }, 1000 * 1);
    });
}

var server = http.createServer((req, res) => {
    switch (req.url) {
        case '/about':
            console.log('saya otw');
            printAgakTelat()
                .then((value) => {
                    console.log(value);
                    console.log('ngopi');
                    res.write('ini about');
                    res.end();
                })
                .catch((error) => console.log(error));
            console.log('saya ngopi');
            return; // Tambahkan return untuk menghentikan eksekusi setelah res.end()

        case '/contact':
            res.write('ini contact');
            res.end();
            return; // Tambahkan return untuk menghentikan eksekusi setelah res.end()

        default:
            res.write('404 not found');
            res.end();
            return; // Tambahkan return untuk menghentikan eksekusi setelah res.end()
    }
});

const port = 3000;
server.listen(port, () => {
    console.log(`server berjalan di http://localhost:${port}`);
});
