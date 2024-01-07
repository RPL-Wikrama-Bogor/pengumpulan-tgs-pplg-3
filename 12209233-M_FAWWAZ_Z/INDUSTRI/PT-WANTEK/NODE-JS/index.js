// // // ROUTING
// // const http = require('http');


// // var server = http.createServer((req, res) => {
// //     // res.write('Saya node js');
// //     // res.end();
// //     // if (req.url == '/about') {
// //     //     res.write('Ini about');
// //     //     res.end();
// //     // } else if(req.url == '/home') {
// //     //     res.write('Ini home');
// //     //     res.end();
// //     // }
// //     // else {
// //     //     res.write('404 Not Found');
// //     //     res.end();
// //     // }

// //     switch (req.url) {
// //         case '/about':
// //             res.write('Ini about');
// //             res.end();
// //             break;
// //         case '/home':
// //             res.write('Ini home');
// //             res.end();
// //             break;
// //         case '/contact':
// //             res.write('Ini contact');
// //             res.end();
// //             break;
// //         default:
// //             res.write('404 Not Found');
// //             res.end();
// //             break;
// //     }
// // });

// // const port = 3000;
// // server.listen(port);

// // console.log(`Server berjalan di http://localhost:${port}`);

// // ROUTING
// const http = require('http');
// // CommonJS / ESM - Ecmascript

// const { testFunction,newFunction} = require('./function');

// //PROMISE

// const printAgakTelat = () => {
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             resolve('Eh ada cewe cantik');
//         }, 1000 * 5);
//     });
// }

// var server = http.createServer((req, res) => {
   

//     switch (req.url) {
//         case '/about':
//             // testFunction();
//             // newFunction('ini berasal dari parameter');
//             console.log('Saya buka tele');
//             printAgakTelat().then((value) => {
//                 console.log(value);
//                 console.log('Deketin lah brow');
//             })
//             .catch((error) => console.log(error));
            
//             res.write('Ini about');
//             res.end();
//             break;
//         case '/home':
//             res.write('Ini home');
//             res.end();
//             break;
//         case '/contact':
//             res.write('Ini contact');
//             res.end();
//             break;
//         default:
//             res.write('404 Not Found');
//             res.end();
//             break;
//     }
// });

// const port = 3000;
// server.listen(port);

// console.log(`Server berjalan di http://localhost:${port}`);

// // ROUTING
// const http = require('http');


// var server = http.createServer((req, res) => {
//     // res.write('Saya node js');
//     // res.end();
//     // if (req.url == '/about') {
//     //     res.write('Ini about');
//     //     res.end();
//     // } else if(req.url == '/home') {
//     //     res.write('Ini home');
//     //     res.end();
//     // }
//     // else {
//     //     res.write('404 Not Found');
//     //     res.end();
//     // }

//     switch (req.url) {
//         case '/about':
//             res.write('Ini about');
//             res.end();
//             break;
//         case '/home':
//             res.write('Ini home');
//             res.end();
//             break;
//         case '/contact':
//             res.write('Ini contact');
//             res.end();
//             break;
//         default:
//             res.write('404 Not Found');
//             res.end();
//             break;
//     }
// });

// const port = 3000;
// server.listen(port);

// console.log(`Server berjalan di http://localhost:${port}`);

// ROUTING
const http = require('http');
// CommonJS / ESM - Ecmascript

const { testFunction,newFunction} = require('./function');

//PROMISE

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Eh ada cewe cantik');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
   

    switch (req.url) {
        case '/about':
            // testFunction();
            // newFunction('ini berasal dari parameter');
            console.log('Saya buka tele');
            const value = await  printAgakTelat() ;
            console.log(value);
            console.log('Deketin');
            // .catch((error) => console.log(error));
            res.write('Ini about');
            res.end();
            break;
        case '/home':
            res.write('Ini home');
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
});

const port = 3000;
server.listen(port);

console.log(`Server berjalan di http://localhost:${port}`);