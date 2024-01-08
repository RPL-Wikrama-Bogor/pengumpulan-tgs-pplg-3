const http = require('http');
// CommonJS/ ESM - Ecmascript
const {testFunction, newFunction} = require('./function');
const { Console } = require('console');

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('saya kena tilang');
        }, 1000 * 5 );
    });
}
var server = http.createServer( async (req, res) => {
    switch (req.url) {
        case '/about':
            console.log('saya otw');
            const value = await printAgakTelat();
            console.log(value);
            console.log('ngopi');
            res.write('Ini about');
            res.end();
            break;
        case '/contact':
            testFunction();
            res.write('Ini contact');
            res.end();
            break;
    
        default:
            res.write('404 Not Found');
            res.end();
            break;
    }
    // if (req.url == '/about') {
    //     res.write('Ini about');
    //     res.end();
    // } else if(req.url == 'contact'){
    // }else {
    //     res.write('404 Not Found');
    //     res.end();
    // }

    
});

const port = 3000;
server.listen(port, () => {
console.log(`Server berjalan di http://localhost:${port}`)
});