const http = require('http');
// Common JS / ESM - Ecmascript
const { testFunction, newFunction } = require('./function');
const { resolve } = require('path');

// Promise
const printAgakTelat = () => {
     return new Promise((resolve, reject) => {
          setTimeout(() => {
               resolve('Sudah sampai');
               // reject('Saya kena tilang pak');
          }, 1000 * 5);
     });
}

var server = http.createServer(async (req, res) => {
     switch (req.url) {
          case '/about':
               testFunction();
               newFunction('Ini berasal dari parameter');
               console.log('Saya Otw')
               const value = await printAgakTelat()
               // .then((value) => {
               console.log(value); w
               console.log('Ngopi')
                    // })
                    .catch((error) => console.log(error));
               res.write('Ini about');
               res.end();
               break;
          case '/contact':
               testFunction();
               newFunction();
               res.write('Ini contact');
               res.end();
               break;
          default:
               res.write('404 Not Found');
               res.end();
     }
});

const port = 3000;
server.listen(port, () => {
     console.log(`Server berjalan di http://localhost:${port}`);
});

