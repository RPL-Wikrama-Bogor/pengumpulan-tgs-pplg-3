const http = require('http');
const {testFunction, newFunction} = require('./function')
require('./function');
//common JS / ESM - ecmascript (untuk import)

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
           resolve('sudah sampai');
        //    reject('saya kena tilang');
        }, 1000 * 5);
    });
   
}

var server = http.createServer(async(req, res) => {
    // res.write('saya node.js');
    // res.end ()
    switch (req.url) {
        case '/about':
            console.log('saya otw');
            const value = await
            printAgakTelat();
            console.log(value);
            console.log('ngopi');
            res.write('Ini about');
            res.end();
            break;
        case '/contact':
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
    // }else if {

    // }else{
    //     res.write('404 Not Found');
    //     res.end();
    // }
});

const port =  3000;
server.listen(port, () => {
console.log(`server berjalan di http:://localhost:${port}`);
});