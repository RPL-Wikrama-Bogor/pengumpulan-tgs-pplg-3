//contoh tipedata integer
let bilanganBulat = 43;
let bilanganPecahan = 3.14;
//contoh tipedata string
let teks1 = 'hello world'
let teks2 = 'controh string'
//contoh tipedata bolean
let benar = true
let salah = false
//contoh tipedata null
let tidakAdaNilai = null
//contoh tipedata undifinied 
let variabelBelumDiisi; // atau benar benar tidak ada data
//contoh tipedata simbol
const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)
//contoh tipedata array
let angka = [1, 2, 3, 4, 5]

//contoh fungsi / function
function tambah (a, b) {
    return a + b 
}
console.log(tambah(3, 4))
//contoh tipedata referensi
let mahasiswa = {
    nama: 'lubna',
    kelas: 'xi',
    jurusan: 'PPLG'
}

let hasilPertambahan = 5 + 3
let hasilPengurangan = 10 - 5
let hasilPerkalian = 5 * 3
let hasilPembagian = 50 / 4
let hasilSisaBagi = 9 % 4
let hasil = 3 + 5 == 7 && 4 + 5 == 9  || true
console.log(hasil)

//operator pembandingan
let hasil1 = 5 == 5;
let hasil2 = 10 != 5;
let hasil3 = 8 > 5;

//operator logika
let hasill = true & false

//operator null checking
let objek = null
let nilai = objek?.properti
console.log(nilai)

//operator perbandingan
let umur = 16 
let status = (umur >= 18 )? "Dewasa" : "Anak-anak"
console.log(status)

//operator perbandingan menggunakan if else
if(umur >= 18) {
    status = "Dewasa"
}else if(umur >= 12 && umur < 18){
    status = "Remaja"
}else{
    status = "Anak anak"
}
console.log(status)

//konsep switch case
let warna = "ijo"
let warnaApa
switch (warna) {
    case "kuning":
        warnaApa = "warna kuning"
        break;
    case "merah":
        warnaApa = "warna merah"
        break;
    case "ijo":
        warnaApa = "warna ijo"
        break;

    default:
        warnaApa = "tidak terdefinisikan"
        break;
}
console.log(warnaApa)
//
function sapa(nama) {
    console.log(`Halo ${nama}`)
}

sapa('lubna')
//javascript function (pure function)
function calculateGST(productPrice) {
    return productPrice *0.05
}
console.log(calculateGST(15))

// arrow function
let sum = (a, b) => {
    return a + b
}
alert(sum(1, 2))

//first class function
let name 
const greet = function(name, kelas) {
    console.log(`halooowww, ${name} ${kelas}`)
}

const sayHello = greet
sayHello('lubnaana', 'kelas XI')
//default parameter dalam function
function sapa1(nama = "pengunjung") {
    console.log(`Halo ${nama}`)
}
sapa1() //argumen kosong
sapa1('lubnasalsa') //argumen terisi
//
let jumlah2 = 10

// let total = jumlah2 + (hargaSatuan || 0 )
// oprator ternary
// let harga2 = hargaSatuan2 !== undefined?
// hargaSatuan2 : 0
// console.log(harga2)

let nilai1 = ""
let nilai2 = null

//operator nullish coalescing 
// let harga3 = hargaSatuan3 ?? 0
// console.log(harga3)

//transformasi array
const numbers = [1, 2, 3, 4, 5 ]

const doubles = numbers.map((numbers) => numbers * 2 )
const numbers1 = [1, 2, 3, 4, 5 ]
const evenNumbers = numbers1.filter((number) => number % 2 == 0)
const _numberRedunce = [1, 2, 3, 4, 5]
const _sumRedunce = _numberRedunce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumRedunce)

const fruits = ['apple', 'green grape', 'watermelon']
fruits.forEach((fruit) => console.log(fruit));

const fruits1 = ['apple', 'green grape', 'watermelon']
fruits1.sort();
console.log(fruits1)

const number = [1, 2, 3, 4, 5]
const result = number.find((number) => number > 3);
console.log(result);




