let bilanganBulat = 43
let bilanganPecahan  = 3.14 

let teks1 = 'hello world'
let teks2 = 'contoh string'

let benar = true
let salah = false

let tidakAdaNilai = null
let variabelBelumDiisi; 

let nilai1 = ""
let nilai2 = null

const simbolUnik = Symbol('deskripsi simbol')

console.log(simbolUnik)

let angka = [1, 2, 3, 4, 5] //integer

function tambah(a, b){
    return a + b
}

console.log(tambah(3, 4))

let siswa = {
    nama : 'john',
    kelas : 'X',
    jurusan : 'PPLG'
}

//aritmatika
let hasilPertambahan = 5 + 3 
let hasilPengurangan = 10 - 5 
let hasilPerkalian = 3 * 5 
let hasilPembagian = 50 / 5 
let hasilSisaBagi = 9 % 2

//operator perbandingan
let hasilNot = 10 != 5 //hasilnya true

let hasilPerbandingan = 8 > 5

//operator logika 
let hasilAnd = true && false // hasilnya false

let hasilOr = true || false // hasilnya true

let hasil = 3 + 5 == 7 && 4 + 5 == 9 || true
console.log(hasil)

let umur = 18
let status = (umur >= 18) ? "Dewasa" : "Anak-Anak"
console.log(status)

if (umur >= 18) {
    status = "dewasa"
} else if (umur >= 12 && umur < 18) {
    status = "Remaja"
} else {
    status = "Anak-anak"
}
console.log(status)

//
let warna = "merah"
let warnaApa
switch (warna) {
    case "kuning":
            warnaApa = "Warna Kuning"
        break;
    case "merah":
            warnaApa = "Warna Merah"
        break;
    case "hijau":
            warnaApa = "Warna Hijau"
        break;

    default:
        warnaApa = "tidak terdefinisi"
        break;
}
console.log(warnaApa)

//
function sapa(nama){
    console.log(`halo ${nama}`)
}
sapa('ivan')

//
function calculateGST(productPrice){
    return productPrice + 0.05
}

console.log(calculateGST(15))

let sum = (a, b) => {
    return a + b
}

// alert(sum(1, 2))
console.log(sum(1, 2))

//
const greet = function(nama, kelas){
    console.log(`helo, ${nama} kelas ${kelas}`)
}

const sayHello = greet
sayHello('ivan', '11')

//
function sapa1(nama = "Pengunjung"){
    console.log(`halo, ${nama}`)
}

sapa1()// argumen kosong
sapa1('ivan')// argumen terisi

//
// let jumlah2 = 10

// let total = jumlah2 + (hargaSatuan || 0)

// let harga2 = hargaSatuan2 !== undefined ?
// hargaSatuan2 : 0

// console.log(harga2)

// let harga3 = hargaSatuan3 ?? 0

// console.log(harga3)

const numbers = [1, 2, 3, 4, 5]

const doubles = numbers.map((numbers) => numbers * 2)
console.log(doubles)

const numbers1 = [1, 2, 3, 4, 5]

const evenNumbers = numbers1.filter((numbers) => numbers % 2 === 0)
console.log(evenNumbers)

//
const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => 
accumulator + currentValue, 0)
console.log(_sumReduce)

//
const fruits = ['apple', 'banana', 'cherry']
fruits.forEach((fruit) => console.log(fruit))

//
const numbers3 = [1, 2, 3, 4, 5]
const result = numbers3.find((numbers3) => numbers3 > 3)
console.log(result)

let angka1 = [1, 2, 3, 4, 5]
let nambah = angka1.splice(2, 0, 10) //menambahkan angka 10 di index ke 2
console.log(angka1)

let angka2 = [1, 2, 3, 4, 5]
let hapus = angka2.splice(2, 1) //menghapus angka 3 
console.log(angka2)

let angka3 = [1, 2, 3, 4, 5]
let rubah= angka3.splice(2, 2, 7, 9) // merubah nilai 3 dan 4 pada index ke 2 
console.log(angka3)
