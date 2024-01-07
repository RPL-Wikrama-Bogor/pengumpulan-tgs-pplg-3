const http = require('http'); 
const { dataMobil } = require('./penugasan_2')

async function fetchData() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve(dataMobil);
        }, 1000 * 5 );
    });
}

var server = http.createServer(async(req, res) => {
    switch (req.url) {
        case '/about':
            console.log('data mobil')
            const value = await fetchData();
            console.log(value);
            console.log('ngopi');
            res.write('Ini about');
            res.end();
            break;
        default:
            res.write('404 Not Found');
            res.end();
            break;
    }
});


// async function main() {
//     switch (dataMobil) {
//         case value:
            
//             break;
    
//         default:
//             break;
//     }
    // try {
    //     console.log('Fetching data...');
    //     const result = await fetchData();
    //     console.log('Fetched data:', JSON.stringify(result, null, 2));
    // } catch (error) {
    //     console.error('Error fetching data:', error);
    // }
// }

main();


