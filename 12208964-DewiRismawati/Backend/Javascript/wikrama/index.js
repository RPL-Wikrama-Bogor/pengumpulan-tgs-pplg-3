let bilanganBulat = 43
let bilanganPecahan = 3.14

let teks1 = 'hello word'
let teks2 = "contoh string"

let benar = true;
let salah = false;

//tipe data khusus
let tidakAdaNilai = null; // masih ada nilainya
let variableBelumDiisi;  //nilai yang bener bner tidak ada

// let nilai1 = "" // ini untuk falidasi data tidak boleh kosong sedangkan nilai2 itu nilai yang kosongg???
// let nilai2 = null

const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)

//data enteger bisa string dan integer
let angka = [1, 2, 3, 4, 5]

//funsi (a itu parameter yaitu menambah nilai)
function tambah (a, b){
    return a + b
}

//object digunakan untukk menyimpan banyak nilai dalam variable atau kumpulan dari variable
let siswa = {
    nama: 'john',
    kelas: 'x',
    jurusan: 'RPL'
}

//operator untuk melaakukan perhitungan
// - operator aritmatika
let hasilPertambahan = 5 + 2;
let hasilPengurangan = 10 - 5;
let hasilPerkalian = 20 * 3;
let hasilPermbagian = 50 / 4;
let hasilSisaBagi = 9 % 4

// //operator perbandingan ini hanya menghasil nilai boleas atau true or false
// let hasil = 5 == 5

// //operator tidak sama dengan merupakan apakaj dua nilai tidak sama
// let hasill = 10 != 5;
// // /operator perbandingan memeriksa nilai pertama lebih besar atau lebih kecil
// let Perbandingan = 8 > 5;

// //operator logika digunakan untuk mengembangkan atau mengembalikan nilai bolean
// let hasilll = true && false;

let angka1 = 5
angka1 +=3

let object = null 
let nilai = object?.properti

console.log(nilai)

let umur = 18
let status = (umur >= 18) ? "Dewasa" : "Anak-anak"

console.log(status)

if(umur >= 18){
    status = "Dewasa"
} else if(umur >= 12 && umur < 18) {
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
        warnaApa = "warna hijau"
    default:
        warnaApa = "tidak terdefinisi"
        break;
}

console.log(warnaApa)

function sapa(nama){
    console.log(`halo ${nama}`)
}
        sapa('ivan')


function calculateGST(productPrice){
    return productPrice * 0.05
}

console.log(calculateGST(15))

//ron function 
let sum = (a , b) => {
    return a + b
}

alert(sum(1, 3))


const greet  = function(name, kelas){
    console.log(`Hello, ${name} ${kelas}`)
}

const sayHello = greet
sayHello('Ivan', 'kelas xi')

function sapa1(nama = "pengunjung"){
    console.log(`Halo ${nama}`)
}

sapa1() //argument kosong
sapa1('Dewi') //argument terisi

// let jumlah2 = 10
// let total = jumlah2 + (hargaSatuan || 0)
// let harga2 = hargaSatuan !== undefined ? hargaSatuan : 0

// console.log(harga2)

// let harga3 = hargaSatuan ?? 0
// console.log(harga3)
//transpormasi array
const numbers = [1, 2, 3, 4, 5]
const doubles = numbers.map((numbers) => numbers * 2)
const numbers1 = [1, 2, 3, 4, 5]
const evenNumbers = numbers1.filter((number) => number % 2 === 0)

const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce)

//menjalankann fungsi pada setiap elemen dalam array tanpa menghasilkan array nbaru
const fruits = ['apple', 'banana', 'cherry']
fruits.sort()
fruits.forEach((fruit) => console.log(fruit))

const numbers2 = [1, 2, 3, 4, 5]
//mencari elemen pertama yang lebih besar dari 3
const result = numbers2.find((number) => number > 3)
console.log(result)

const fruits1 = ['apel', 'pisang', 'ceri', 'anggur'];
const joinedString = fruits1.join(', ');

console.log(joinedString);




