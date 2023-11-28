const http = require('http');
const { testFunction, newFunction } = require('./function');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Saya sudah sampai')
            // reject('Saya kena tilang');
        }, 1000 * 5);
    });
};

var server = http.createServer((req, res) => {
    switch (req.url) {
        case '/about':
            console.log('Saya otw');
            printAgakTelat()
                .then((value) => {
                    console.log(value);
                    console.log('Ngopi'); 
                    res.write('Ini About');
                    res.end();
                })
                .catch((error) => console.log(error));
            break;

        case '/contact':
            res.write('Ini Contact');
            res.end();
            break;

        default:
            res.write('404 Not Found');
            res.end();
            break;
    }
});

const port = 5000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});

testFunction();
