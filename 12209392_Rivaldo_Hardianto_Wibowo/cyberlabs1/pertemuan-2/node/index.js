const http = require('http');
// cummoonjs /esm - ecmascript
const { newFunction, testFunction } = require('./function');
const { error } = require('console');


//Promise 

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() =>{
            // reject('saya sudah sampai');
            resolve('saya sudah sampai');
        }, 1000 * 5)
    });
}
var server = http.createServer(async (req, res) => {


    switch (req.url) {
        case '/about':
            console.log('saya otw');
            const value = await printAgakTelat()
            console.log(value);
            console.log('Ngopi coyyy');
            // newFunction('ini berasal dari parameter');
            // testFunction();
            res.write('ini about');
            res.end();
            break;
        case '/contact':
            res.write('ini contact');
            res.end();
            break;
    
        default:
            res.write('404 Not Found');
            res.end();
            break;
    }
    // if (req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // } else {
    //     res.write('BUT I CURUMBLE COMPETLY WHEN YOU CRY');
    //     res.end();
    // }
});

const port =3000;
server.listen(port, () =>{
    console.log(`server berjalan di http:/localhost:${port}`); 
});

