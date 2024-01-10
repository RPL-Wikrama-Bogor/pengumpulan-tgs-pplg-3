const http = require('http');
const data = require('./data');

const cetak = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve();
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
    const gabung = data
        .filter(car => car.year === 2022)
        // filter mobil yang 2022
        .sort((a,b) => a.car.localeCompare(b.car))
        // mengurutkan elemen dalam array sesuai abjad
    
        await cetak();

        const string = `data: ${gabung.map(car => `${car.car} (${car.year})`).join(', ')}`;
        // metode map untuk mengambil setiap elemen dalam array gabung dan metode join untuk mengambil metode array  hasil dari map dan menggabungkannya

        res.end(string);
})

const port = 5000;
server.listen(port, () => {
    console.log(`Server berjalan diatas gunung tp boonk jalannya di http://localhost:${port}`);
    }
);