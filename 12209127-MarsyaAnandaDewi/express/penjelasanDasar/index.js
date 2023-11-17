let bilanganBulat = 43
let bilanganPecahan = 3.14

// string
let teks1 = 'hello world'
let teks2 = "contoh string"

// boolean
let benar = true
let salah = false

// tipe data khusus
let tidakAdaNilai1 = null
let variabelBelumDiisi;

const simbolUnik = Symbol('deskripsi simbol')

console.log(simbolUnik)

let angka = [1, 2, 3, 4, 5]

function tambah(a, b){
    return a + b
}

console.log(tambah(3, 4))

let siswa = {
    nama: 'atuy',
    kelas: 'IX',
    jurusan: 'RPL',
}

let nilai1 = ""
let nilai2 = null

let hasilPertambahan = 5 + 3
let hasilPengurangan = 10 - 5
let hasilPerkalian = 20 * 3
let hasilPembagian = 50 / 4
let hasilSisaBagi = 9 % 4

let hasil = 3 + 5 == 7 && 4 + 5 == 9 || true

let angka1 = 5
 angka1 += 3

let objek = null
let nilai = objek?.properti


let hasil1 = 8 > 5
let hasil2 = true && false  // hasilnya false

console.log(hasil1)

let umur = 18
let status = (umur >= 18) ? "Dewasa" : "Anak-Anak"

console.log(status)

if(umur >= 18){
    status = "Dewasa"
}else if(umur >=12 && umur < 18){
    status = "Remaja"
}else{
    status = "Anak-Anak"
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
        warnaApa = "warna hijau"
        break;
    default:
        warnaApa = "tidak terdefinisi"
        break;
}

console.log(warnaApa)

function sapa(nama){
    console.log(`halo ${nama}`)
}  

sapa(`marsya`)

function calculateGST(productPrice){
    return productPrice * 0.05
}

console.log(calculateGST(15))

// yang di dalem kurung kurawal itu scope
let sum =  (a, b) => {
    return a + b
}

alert(sum(1, 20))

const greet = function(nama, kelas){
    console.log(`helo, ${nama}, kelas ${kelas}`)
}

const sayHello = greet
sayHello(`lugowo`, `IX`)

function sapa1(nama = "pengunjung"){
    console.log(`Hello ${nama}`)
}

sapa1() //argumen kosong
sapa1('arsya') //argumen terisi

let jumlah2 = 10

// let hargaSatuan = 20
// let hargaSatuan2 = 30
// let hargaSatuan3 = 4

// let total = jumlah2 + (hargaSatuan || 0)

// let harga2 = hargaSatuan2 !== undefined ?
// hargaSatuan2 : 0

// console.log(harga2)

//let harga3 = hargaSatuan3 ?? 0

// console.log(harga3)

const numbers = [1, 2, 3, 4, 5]

const doubles = numbers.map((numbers) => numbers * 2)

const numbers1 = [1, 2, 3, 4, 5]

const evenNumbers = numbers1.filter((number) => number % 2 === 0)

const _numberReduce = [1, 2, 3, 4, 5]  
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => 
accumulator + currentValue, 0)
console.log(_sumReduce)

const fruits = ['apple', 'banana', 'cherry'];
fruits.forEach((fruit) => console.log(fruit));

const fruits2 = ['anggur', 'durian', 'peach'];
fruits.sort();

const numbers2 = [1, 2, 3, 4, 5] ;

//mencari elemen pertama yang lebih besar dari 3
const result = numbers2.find((number) => number > 3);

console.log(result); //output: 4


//TUGAS KELOMPOK NO 3
 

const fruits3 = ['apel', 'pisang', 'ceri', 'anggur'];
console.log(fruits3.join(','))

