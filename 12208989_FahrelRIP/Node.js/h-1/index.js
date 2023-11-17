//const tidak dapat diubah
//var = cakupan global -> cakupan global bisa diakses diluar function
//let = cakupan block itu saja -> cakupan block tidak bisa diakses diluar function 

// Number
let bilanganBulat = 43
let bilanganDesimal = 3.14

// string
let teks1 = 'hello world'
let teks2 = "contoh string"  //kutip dua bisa memanggil kutip satu dan sebaliknya. backtip bisa memanggil variable

// Boolean
let benar = true
let salah = false

// null
let tidakAdaNilai = null

let nilai1 = ""
let nilai2 = null

//unlifined
let variabelBelumDiisi

//symbol
const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik);

//array
let angka =  [1, 2, 3, 4, 5]

//function
function tambah(a, b) {
    return a + b;
}

console.log(tambah(9, 6));   

//object
let siswa = {
    nama : 'fahrel',
    usia: '16',
    status: 'pelajar',
}

//operator
let hasilPlus = 5 + 3
let hasilMinus = 10 - 3
let hasilKali = 9 * 3
let hasilBagi = 81 * 3
let hasilModulus = 9 % 4
let hasilPerbandingan = 5 == 5
let hasilTidakSamaDengan = 10 != 5
let hasilLebihBesar = 8 > 5
let hasilLebihKecil = 5 < 8
let hasil = true && false
let hasilDan = true || false

let angka1 = 5
angka1 += 3 

let objek = null 
let nilai = objek?.properti

console.log(nilai);

let umur = 17
let status = (umur >= 18) ? "Dewasa" : "Anak-Anak"

console.log(status);

if (umur >= 18) {
    status = "Dewasa"
}else if (umur >= 12 && umur < 18) {
    status = "Remaja"
}else{
    status= "Anak-Anak"
}
console.log(status);

let warna = "merah"
let warnaApa
switch (warna) {
    case "kuning":
        warnaApa = "warna Kuning"
        break;
    case "merah":
        warnaApa = "warna Merah"
        break;
    case "hijau":
        warnaApa = "hijau"
        break;
    default:
        warnaApa = "tidak terdefinisi"
        break;
}
console.log(warnaApa);

function sapa(nama) {
    console.log(`halo ${nama}`)
}


sapa('ganteng')

//pure function
function calculateGST(productPrice) {
    return productPrice * 0.05
}
console.log(calculateGST(15))


let sum = (a, b) => {
    return a + b
}
alert(sum(1, 4))

//menampilkan teks dari parameter yang dibuat
const greet = function (nama, kelas) {
    console.log(`hello ${nama}, kelas ${kelas} `);
}

const sayHello = greet
sayHello('Fahrel', 'PPLG')

function sapa(nama= 'Psengunjung') {
    console.log(`Hallo, ${nama}`);
}

sapa()
sapa('siganteng')

// let jumlah = 10
// let total = jumlah + (hargaSatuan1 || 0)

// let harga2 = hargaSatuan1 !== undefined ? hargaSatuan : 0
// hargaSatuan1 : 0

// console.log(harga);

// let harga = hargaSatuan ?? 0;

//mengubah elemen dalam array
const numbers = [1, 2, 3, 4, 5]
const doubles = numbers.map((numbers) => numbers * 2)
console.log(doubles);

// mengfilter array dan mengahpus elemen yang bukan miliknya
const numbers1 = [1, 2, 3, 4, 5]
const evenNumbers = numbers1.filter((number) => number %2 === 1 )
console.log(evenNumbers);

//mengambil semua elemen array dan menggabungkannya menjadi satu nilai
const numberReduce = [1, 2, 3, 4, 5]
const sumReduce = numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(sumReduce)

// perulangan tanpa perubahan pada array
const fruits = ["apple", "cherry", "banana"]
fruits.forEach((fruit) => console.log(fruit));

//mengurutkan elemen array
fruits.sort()
console.log(fruits);

//find, mencari array yang memenuhi kondisi
const number = [1, 2, 3, 4, 5]
const result = numbers.find((number) => number > 3)
console.log(result);