const http = require('http');
const { newFunction, testFunction } = require('./function');

// promise

const printAngkaTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('sudah sampai');
            // reject('saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async (req, res) => {
    // http://localhost:3000/about
    // /about

    switch (req.url) {
        case '/about':
             console.log('saya otw');
             const value = await
             printAngkaTelat()
            //     .then((value) => {
                     console.log(value)
                 console.log('ngopi')
            //     }
            //     )
            //     .catch((error) => console.log(error));

            //testFunction();
           // newFunction('ini dari isekai');
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
    console.log(`Server berjalan di http://localhost:${port}`);
}
);
