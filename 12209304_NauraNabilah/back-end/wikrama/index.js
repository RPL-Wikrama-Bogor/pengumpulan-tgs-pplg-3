//tipe data interger
let bilanganBulat = 43;
let bilanganPecahan = 3.14;
//tipe data string
let teks1 = 'hello world';
let teks2 = 'contoh string';
//tipe data boolean
let benar = true
let salah = false
//tipe data null (tidak ada nilai)
let tidakAdaNilai = null
//tipe data undifined
let variabelBelumDiisi;
//tipe data simbol
const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)
//tipe data array
let angka = [1, 2, 3, 4, 5,]
//tipe data fingction
function tambah(a, b) {
    return a + b
}

console.log (tambah (4, 6))
//tipe data object 
let siswa = 
{
    nama: 'yusup',
    kelas: 'xi',
    jurusan: 'tahfidz'
}

let hasilPertambahan = 5 + 4
let hasilPengurangan = 8 - 4
let hasilPerkalian = 5 * 9
let hasilPembaghian = 8 / 2
let hasilSisaBagi = 9 % 4

//operator perbandingan
let hasil =  5 == 5
let hasil2 = 10 != 5
let hasil3 = 8 < 5
let hasil4 = 5 >= 5
let hasil5 = 3 + 5 && 4 + 5 == 9 || true
console.log(hasil)
//operator logika (AND = && mengambil nilai true jika operatornya true)
let hasill = true && false
//operator null checking
let objek = null
let nilai = objek?.properti

console.log (nilai)
//operator 
let umur = 16
let status = (umur >= 18)? "Dewasa" : "Anak - anak"

console.log(status)

if (umur >= 18) {
    status =  "Dewasa"
}else if(umur >= 12 && umur < 18) {
    status = "Remaja"
}else{
    status = "Anak - anak"
}

console.log(status)

let warna = "pink"
let warnaApa

switch (warna) {
    case "putih":
        warnaApa = "warna putih"
        break;
    case "hitam":
        warnaApa = "warna hitam"
        break;
    case "pink":
        warnaApa = "warna pink"
        break;
    default:
        warnaApa = "tidak terdefinisi"
        break;
}

console.log(warnaApa)
//functuon js
function sapa (nama){
    console.log(`halo ${nama}`)
}

sapa ('noraa')
//pure function
function calculateGST(productPrice){
    return productPrice * 0.05
}
console.log(calculateGST(15))
//arrow function
let sum = (a, b) => {
    return a + b
}

// alert (sum(10, 17))
//first class function

const greet = function(nama, kelas){
    console.log(`helo ${nama}, kelas ${kelas}`)
}

const sayHello = greet
sayHello('noraa', '11')
//default parameter
function sapa1 (nama = "pengunjung"){
    console.log(`Halo ${nama}`)
}
sapa1()//argumen kosong
sapa1('noraa')//argumen terisi

let jumlah2 = 10

//let total = jumlah2 + (hargaSatuan || 0)
//operator ternary
// let harga = hargaSatuan2 !== undefined ?
// hargaSatuan2 : 0;

// console.log (harga2)

let nilai1 = ""
let  nilai2 = null
//operator nullish
// let harga3 = hargaSatuan3 ?? 0

// console.log(harga3)
//array
const numbers = [1, 2, 3, 4, 5]

const doubles = numbers.map((numbers) => numbers * 2)
console.log(doubles)
//tranformasi array (filter)
const numbers1 = [1, 2, 3, 4, 5]

const evenNumbers = numbers1.filter((number) => number % 2 === 0)
console.log(evenNumbers)

//reduce
const _numberReduce = [1, 2, 3, 4, 5 ]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce) //_ digunakan untuk berulang ulang

//foreeach
const fruits = ['apple', 'cherry', 'watermelon'];
fruits.forEach((fruits) => console.log(fruits));
//sort (sesuai abjad)
const fruit = ['melon', 'strawberry', 'banana'];
fruit.sort();
console.log(fruit)
//find sesuai true/false
const numberss = [1, 2, 3, 4, 5]
const result = numberss.find((number) => number > 3)
console.log(result);
