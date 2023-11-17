const http = require('http')
const { testFunction ,newFunction } = require('./function');
const { log } = require('console');
//cara import = CommonJS, ESM = Ecmascript 

const printAgakTelat = () =>
{
    return new Promise((resolve, reject) => 
    {
        setTimeout(() => 
        {
           resolve('Saya Sudah Sampai')
        }, 1000 * 5)
    })
}

//async berfungsi agar lebih mudah dipahamie
var server = http.createServer(async(req,res) => 
{
    // res.write('Saya node.js')
    // res.end()

    switch (req.url) {
        case '/about':
            console.log('Saya utiwi');
            const value = await printAgakTelat()  
            console.log(value);    
            console.log('ngopi');      
            
            res.write('ini about')
            res.end()
            break;

        case '/contact':
            res.write('ini contact')
            res.end()
            break;
        
        default:
            res.write('404 Not Found')
            res.end()
            break;
    }

    // if (req.url == '/about') {
    //     res.write('ini about')
    //     res.end()
    // }else if( req.url == '/portofolio' ) {
        
    // }
    // else {
    //     res.write('404 Not Found')
    //     res.end()
    // }
})

const port = 3000
server.listen(port, () => {
    console.log(`Server Berjalan di http://localhost:${port}`);
}) 

