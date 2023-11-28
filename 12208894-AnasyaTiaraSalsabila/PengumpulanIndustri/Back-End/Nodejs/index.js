const http = require('http');
const {newFunction, testFunction} = require('./function');

// promise

const printAngkaTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('sudah sampai');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
    // http://localhost:3000/about
    // /about

    switch (req.url) {
        case '/about':
            console.log('saya otw');
            const value = await printAngkaTelat();
            console.log(value);
            console.log('ngopi');
            testFunction();
            newFunction('hy bg ini dari parameter');
            res.write('ini about');
            res.end();
            break;
        case '/contact':
            
            res.write('contact me');
            res.end();
            break;
        default:
            res.write('404 not found');
            res.end();
    }

    // if (req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // } else {
    //     res.write('404 not found');
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan diatas gunung tp boonk jalannya di http://localhost:${port}`);
    }
);