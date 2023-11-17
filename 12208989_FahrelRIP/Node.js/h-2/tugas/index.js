// 5. Soal: buatkan file data.js yang berisi data mobil serta tampilkan kurang dari sama dengan tahun 1994 lalu tampilkan movienya saja berbentuk array objek lalu datanya diakses oleh server.js dengan menggunakan async/await dengan delay 5000 pada promise ditampilkan dalam bentuk string dari data berikut

const url = require('url')
const carsData = require('./server')
const { log } = require('console')

const delay = () => 
{
    return new Promise((resolve, reject)=>
    {
        setTimeout(() => 
        {
            resolve('daftar mobil keluaran tahun 2022 : ')
        }, 5000);
    })
}

const getData = async () => {
        const value = await delay()
        console.log(value);
        const filteredCars = cars.filter(cars => cars.year <= 2022);
        const dataString = JSON.stringify(filteredCars); //JSON berfungsi untuk mengkonversi data yang sudah di filter menjadi string JSON
        console.log(dataString);
    } 

getData();

      //tugas : pindahkan ini ke ddalan data.js dan tampilkan kedalam web 



