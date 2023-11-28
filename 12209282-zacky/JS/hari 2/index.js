const http = require('http');
//CommonJS/ESM - Ecmascript
const { testfunction,newfunction } = require('./function');


var server = http.createServer((req,res) => {
    switch (req.url) {
        case '/about':
            newfunction()
            testfunction()
            res.write('ini about')
            res.end()
            break;
        case '/contact':
            res.write('ini contact')
            res.end()
            break;
        default:
            res.write('ini about')
            res.end()
            break;
    }
    if (req.url = '/about') {
        res.write('ini about');
        res.end();
    }else{
        
    }
    res.write('saya mengetik');
    res.end();
});

const port = 10000;
server.listen(port);
console.log(`server berjalan di http://localhost:${port}`);