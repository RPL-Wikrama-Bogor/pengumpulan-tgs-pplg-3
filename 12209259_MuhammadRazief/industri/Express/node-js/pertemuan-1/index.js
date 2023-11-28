const http = require('http');
const { testFunction,newFunction } = require('./function');

//promise
const printAgakTelat = () => {
    return new Promise((resolve,reject) => {
        setTimeout(() => {
             resolve('TANDING FUTSAL')
           // reject('saya kena tilang')
        }, 1000 * 5);
    });
}


var server = http.createServer((req, res) => {
    req.url
switch (req.url) {
    case '/about':
       console.log('PPLG XI-3 VS PPLG XI-4');
        printAgakTelat()
       .then((value)=> {
        console.log(value);
        console.log('SKOR : 10-2 WIN PPLG XI-3');
       })
       .catch((error) => console.log(error));
       
        res.write('Ini About');
        res.end();
        break;

        case '/contact':
        res.write('Ini Contact');
        res.end();
        break;

    default:
        res.write('404 Not Found')
        res.end();
        break;
}

    // if (req.url == '/about') {
    //     res.write('Ini About');
    //     res.end();
    // } else if (req.url == '/contact') {
    //     res.write('Ini Contact');
    //     res.end();
    // }
    // else {
    //     res.write('404 Not Found')
    //     res.end();
    // }
});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http:://localhost:${port}`);