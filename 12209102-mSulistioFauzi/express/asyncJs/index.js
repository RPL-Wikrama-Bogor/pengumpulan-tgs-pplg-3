const http = require('http');
const {tFunction, nFUnction} =  require('./func')

const latePrint = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('nyampe');
            //reject('kena tilang')
        }, 1000*3 )
    });
}

var server = http.createServer(async(req, res) => {
    switch (req.url) {
        case '/':
            console.log('utiwi');
            const value = await latePrint();
            console.log(value);
            console.log('ngopi');
            res.write('home');
            res.end();
            break;
        case '/about':
            res.write('about');
            res.end();
        default:
            res.write('nyasar');
            res.end();
            break;
    }
    
    // if (req.url == '/') {
    //     res.write('home');
    //     res.end();
    // } else {
    //     res.write('nyasar');
    //     res.end();
    // }

});

const port = 3000
server.listen(port);
console.log('Keren bang, http://localhost:' + port);

