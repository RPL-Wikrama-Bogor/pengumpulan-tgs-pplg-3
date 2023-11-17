const carData = require('./data')
const http = require('http');
var angka = 1
const cetak1 = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            if (angka == 1) { 
                resolve('program berhasil');
            }else {
                reject('program gagal');
            }
        }, 1000 * 5);
    }); 
}

var server = http.createServer(async (req, res) => { //req isinya data yang akan dikirim oleh browser, res objek yang kita kirim dari responnya 
    const gabung = carData 
    .filter(item => item.year === 2022)
    .sort((a, b) => a.car.localeCompare(b.car)) //localecompare buat milih abjad yang paling pertama

    console.log(await cetak1())
    gabung.forEach(item => {
        res.write(`${item.car}, ${item.model}, ${item.year}\n`)
    })
    res.end();
});

const port = 3000

server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
})

