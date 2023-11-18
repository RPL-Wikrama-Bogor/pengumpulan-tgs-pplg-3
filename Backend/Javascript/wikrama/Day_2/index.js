const http = require('http'); //require ini mau menginport si http nya
// const testFunction = require('./function.js');
const {testFunction, newFunction} = require('./function');

//promise
const printAgaTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('saya kena tilang');
        }, 1000 * 5);

    });
}

var server = http.createServer(async(req, res) => {
    switch (req.url){
        case '/about' :
            // testFunction();
            // newFunction('Ini berasal dari parameter')
            console.log('Saya otw');
            const value = await
            printAgaTelat();
            console.log(value);
            console.log('ngopi');
            res.write('Ini about');
            res.end();
            break;
        case '/contact' :
            res.write('Ini contact');
            res.end();
            break;
        default:
            res.write('404 not found');
            res.end();
            break;
    }



    // // http://localhost:3000/about
    // if (req.url == '/about'){
    //     res.write('Ini about');
    //     res.end();
    // } else {
    //     res.write('404 not found');
    //     res.end()
    // }
});

const port = 3000;
server.listen(port,() => {});
console.log(`Server berjalan di http://localhost:${port}`);