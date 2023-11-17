const http = require('http'); //require ini fungsi nya untuk import
//Common js / ESM - Ecmascript (untuk import)
const { testFunction, newFunction} = require('./function')

//Promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('Saya kena tilang');
        }, 1000 * 5);
    });
    
}

var server = http.createServer(async (req, res) => { //req isinya data yang akan dikirim oleh browser, res objek yang kita kirim dari responnya 
    switch (req.url) {
        case '/about':
            console.log('Saya otw');
            const value = await printAgakTelat();
            console.log(value);
            console.log('Ngopi');
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
    // }
    // else if (req.url == '/contact') {
        
    // }else {
    //     res.write('404 Not Found');
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});