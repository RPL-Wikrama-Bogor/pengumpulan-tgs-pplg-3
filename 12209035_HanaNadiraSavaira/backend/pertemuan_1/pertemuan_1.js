//integer
let bilanganBulat = 43
let bilanganPecahan = 3.14

//string
let text1 = 'hello word!'
let text2 = 'hallo hana nadira savaira!'

//boolean
let benar = true 
let salah = false 

//tipe data khusus
let tidakAdaNilai = null
let variabelBelumDiisi 

const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)

//array 
let angka = [1, 2, 3, 4, 5]

//function 
function tambah(a, b) {//a, b itu parameter
    return a + b //return itu mengembalikan nilai
}
console.log(tambah(3, 4))

//object, digunakan untuk menyimpan banyak nilai dalam variabel 
let siswa = {
    nama: 'hana',
    kelas: 'XI',
    jurusan: 'RPL'
}

//operator adalah simbol yang digunakan untuk melakukan oprasi pada tipe data (untuk melakukan perhitungan atau bisa untuk manipulasi string)
//operator aritmatika
let hasilPenjumlahan = 5 + 3
let hasilPengurangan = 10 - 5
let hasilPerkalian = 20 * 3
let hasilPembagian = 50 / 4
let hasilModulus = 9 % 4 //modulus => sisa bagi

//oprator perbandingan, oprator ini hanya menghasilkan boolean true atau false (== sama dengan != tidak sama dengan) 
let hasil = 5 == 5 
let hasill = 10 != 5
let perbandingan = 8 > 5 

//oprator logika untuk menggangbungkan atau membalikkan nilai boolean 
//AND ($$) OR(||) NOT(!)

//oprator penugasan untuk memberikan nilai kepada variabel. 
let angka1 = 5
angka1 += 3
console.log(angka1)

//oprattor kondisonal
let umur = 17
let status = (umur >= 18) ? "Dewasa" : "Anak-anak"

if (umur >= 18) {
    status = "Dewasa"
} else if (umur >= 12 && umur < 18) {
    status = "Remaja"
} else {
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
        warnaApa = "warna hijau"
        break;

    default:
        warnaApa = "tidak terdefinisi"
        break;
}

console.log(warnaApa)

//mendefinisikan
function sapa(nama) {
    console.log(`hallo ${nama}`)
}
//memanggil
sapa('hana')

function calculatesGST(productPrice) {
    return productPrice * 0.05
}

console.log(calculatesGST(15))

let sum = (a, b) => {
    return a + b
}
alert(sum(1, 2))

//first-class function
const greet = function (nama, kelas) {
    console.log(`hello, ${nama} kelas ${kelas}`)
}

const sayHello = greet
sayHello('nana', 11)

//default value 
function sapa1(nama = "Pengunjung") {
    console.log(`hello ${nama}`)
}
sapa1() //argumen kosong
sapa1('Mahen') //argumen terisi

let jumlah = 10 
// let total = jumlah + (hargaSatuan  || 0)

//oprator ternary
// let harga2 = hargaSatuan2 !== undefined ? hargaSatuan2 : 0
// console.log(harga2)

//nullish 
// let harga3 = hargaSatuan3 ?? 0
// console.log(harga3)

//transformasi array
const numbers = [1, 2, 3, 4, 5];
//fungsi dari maps semua angka yang ada do array numbers di kali kan 2 
const double = numbers.map((numbers) => numbers * 2)

const numbers1 = [1, 2, 3, 4, 5]
const evenNumbers = numbers1.filter((number) => number % 2 === 0 )

//untuk menambahkan semua jumlah angka pada array atau bisa menggunakan array_sum
const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce)

// forEach() menjalankan fungsi pada setiap element dalam array tanpa menghasilkan array baru
const fruits = ['apel', 'pisang', 'ceri', 'anggur'];
const joinedString = fruits.join(', ');

console.log(joinedString);
// fruits.sort()
// fruits.forEach((fruits) => console.log(fruits)) 

// find pada array digunakan untuk menemukan elemet pertama dalam array yang mmenuhi kondisi yang ditentukan
const bilangan = [1, 2, 3, 4, 5]
const result = bilangan.find((number) => number > 3 )
console.log(result)