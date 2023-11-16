let bilanganBulat = 43
let bilanganPecahan = 3.14

let teks1 = 'hello world'
let teks2 = 'contoh string'

console.log(teks1, teks2);

let benar = true
let salah = false

// tipe data khusus

//1. NULL

let tidakAdaNilai = null

let nilai1 = ''
let nilai2 = null

//2. Unfined

let variabelBelumDiisi;

//3. Symbol

let simbolUnik = Symbol('deskiripsi simbol')
console.log(simbolUnik)

//4. Array

let angka = [1, 2, , 3, 4, 5]
console.log(angka);

//5, Fungsi

function tambah(a, b) {
    return a + b
}

console.log(tambah(6, 4))

//6. Object

let siswa = {
    nama: 'Fawwaz',
    kelas: 'XI',
    jurusan: 'RPL'
}

console.log(siswa)

// OPREATOR ARITMATIKA

// 1. Tambah

let hasilPenjumlahan = 5 + 5;
console.log(hasilPenjumlahan);

// 2. Kurang 

let hasilPengurangan = 10 - 5;
console.log(hasilPengurangan);

// 3. Kali 

let hasilPerkalian = 10 * 5;
console.log(hasilPerkalian);

// 4. Bagi 

let hasilPembagian = 10 / 5;
console.log(hasilPembagian);

// 5. Modulus 

let hasilSisaBagi = 9 % 4;
console.log(hasilSisaBagi);

// OPERATOR PEBANDINGAN

// 1. ==

// 2. !=

// 3. >

// 4. <

// 5. >=

// 6. && Mengembalikan nilai true jika kedua nya true 

let hasil = 3 + 5 == 7 && 4 + 5 == 9 || true
console.log(hasil)

// 7.  Mengembalikan nilai true jika kedua nya true 

// ========================

let angka1 = 5
angka1 += 3

let object = null
let nilai = object?.properti

console.log(nilai);

let umur = 18
let status = (umur == 18) ? "Dewasa" : "Anak-anak"

console.log(status);

// IF STATMENT

if (umur >= 18) {
    status = "Dewasa"
} else if (umur >= 12 && umur < 18) {
    status = "Remaja"
} else {
    status = "Anak - anak"
}

console.log(status);

// SWITCH STATMENT

let warna = "Kuning"
let warnaApa

switch (warna) {
    case "Kuning":
        warnaApa = "Warna Kuning"
        break;
    case "Merah":
        warnaApa = "Warna Merah"
        break;
    case "Hijau":
        warnaApa = "Warna Hijau"
        break;
    default:
        warnaApa = "Tidak Terdefinisi"
        break;
}

console.log(warnaApa);

// JAVASCRIPT FUNCTION

// MEMBUBAT FUNCTION

function sapa(nama) {
    console.log(`halo ${nama}`);
}

sapa('Fawwaz')

//MEMANGGIL FUNCTION 

// FURE FUNCTION

function calculatorGST(productPrice) {
    return productPrice * 0.05
}

console.log(calculatorGST(15));

// ARROW FUNCTION 

let sum = (a, b) => {
    return a + b
}

alert(sum(1, 2))

//FIRST-CLASS FUNCTION

const greet = function (nama, kelas) {
    console.log(`Hello ${nama},${kelas}`);
}

const sayHello = greet
sayHello('Fawwaz', 'PPLG XI-3')

//PENGGUNAAN DEFAULT VALUE 

function sapa1(nama = "Pengunjung"){
    console.log(`Halo ${nama}`);
}

sapa1 () //ARGUMEN KOSONG
sapa1('Fawwaz') //ARGUMEN TERISI SEKALIGUS MENGISI PARAMETER

let hargaSatuan;
let jumlah = 10
total = jumlah + (hargaSatuan || 0)

let harga= hargaSatuan !== undefined ?
hargaSatuan : 0

console.log(harga);

// OPERATOR NULLISH

let hargaSatuan2;

let harga2 = hargaSatuan2 ?? 0
console.log(harga2);

//TRANSFORMASI ARRAY 

const numbers = [1, 2, 3, 4, 5]

const doubles = numbers.map((numbers) => numbers * 2)

console.log(doubles);

//FILTER

const numbers1 = [1, 2, 3, 4, 5]
const evenNumber = numbers1.filter((number) => number % 2 === 0)

const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce);

//FOR EACH

const fruits = ['apple', 'peach', 'banana'];
fruits.forEach((fruit) => console.log(fruit));

//SORT

// Mnegurutkan dari abjad pertama
const fruits1 = ['pisang', 'cherry', 'pepaya'];
fruits1.sort();

console.log(fruits1);

//FIND 

const number3 = [1, 2, 3, 4, 5];

//Mencari elemen pertama yang lebih besar dari 3

const result = number3.find((number) => number > 3);
console.log(result);