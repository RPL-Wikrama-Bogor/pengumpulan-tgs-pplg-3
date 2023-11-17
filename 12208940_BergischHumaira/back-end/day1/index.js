let bilanganBulat = 43
let bilanganPecahan = 3.14

// string
let teks1 = 'hello world'
let teks2 = "contoh string"

// boolean
let benar = true
let salah = false

// tipe data khusus
let tidakAdaNilai = null
let varibelBelumDiisi;

const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)

let angka = [1, 2, 3, 4, 5]
angka.shift() //menghapus 
angka.push(1)
angka.splice(2, 0, 10)


function tambah (a, b) {
    return a + b
}
console.log(tambah(3, 4))

// deklarasi objek
let siswa = {
    nama: 'john',
    kelas: 'X',
    jurusan: 'RPL'
}

let hasil2 = true && false
// AND mengembalikan true jika operator keduanya true
let nilai1 = ""
let nilai2 = null 

let hasilPertambahan = 5 + 3

let hasilPengurangan = 10 - 5

let hasilPerkalian = 20 * 3

let hasilPmebagian = 50 / 4

let hasilSisaBagi = 9 % 4

let hasil = 3 + 5 == 7 && 4 +5 == 9 
console.log (hasil)

let angka1 = 5
angka1 = 9

let objek = null
let nilai = objek?.properti
let umur = 18
let status = (umur >= 18) ? "dewasa" : "Anak-anak"
console.log (status)

if (umur >= 18) {
    status = "Dewasa"
}else if (umur > umur < 18) {
    status = "Remaja"
}else {
    status = "Anak-anak"
}
console.log(status)

let warna = "merah"
let warnaApa
switch (warna) {
    case "kuning":
        warnaApa = "warna kuning"
        break;
    case "merah":
        warnaApa = "warna merah"
        break;
    case "hijau":
        warnaApa = " warna hijau"
        break;
    default:
        warnaApa = "tidak terdefinisi"
        break;
}
console.log (warnaApa)

function sapa(nama) {
    console.log(`hallo ${nama}`)
}
sapa('giss')

function calculateGST(productPrice) {
    return productPrice * 0.05
}
console.log(calculateGST(15))

let sum = (a, b) => {
    return a + b
}
alert(sum(1, 2))

const greet = function(nama, kelas) {
    console.log( `hallo, ${nama} ${kelas}`)
}
const sayHello = greet
sayHello('giss', ' kelas XI')

function sapa1(nama = "pengunjung") {
    console.log(`halo ${nama}`)
}
sapa1() //argumen kosong
sapa1('giss') //argumen terisi

// let jumlah2 = 10

// let total = jumlah2 + (hargaSatuan || 0)

// let harga2 = hargaSatuan2 !== undefined ? 
// hargaSatuan2 : 0

// console.log (harga2)

// let harga3 = hargaSatuan3 ?? 0
// console.log(harga3)

const numbers = [1, 2, 3, 4, 5]
const doubles = numbers.map((numbers) => numbers * 2)

const numbers1 = [1, 2, 3, 4, 5]
const evenNumbers = numbers1.filter((number) => number % 2 === 0)

// element reduce () untuk menggambungan semua isi array
const _numReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numReduce.reduce((accumulator, currentValue) => 
accumulator + currentValue, 0)
console.log(_sumReduce)

// metode foraech() untuk menjalankan fungsi pada setiap elemen array tanpa menghasilkan array baru 
const fruits = ['apple', 'banana', 'cherry']
fruits.forEach((fruit) => console.log(fruit))
// output: apple, banana, chery (tanpa perubahan pada array)

const buah = ['banana', 'apple', 'cherry']
buah.sort()

// find untuk menemukan elemen pertama pada array yang memenuhi kondisi fungsi 
const nomor = [1, 2, 3, 4, 5]
// mencari elemen pertama yang lebih besar dari 3
const result = nomor.find((number) => number > 3)
console.log(result)

const fruits2 = ['apel', 'pisang', 'ceri', 'anggur'];

console.log(fruits2.join(','))
