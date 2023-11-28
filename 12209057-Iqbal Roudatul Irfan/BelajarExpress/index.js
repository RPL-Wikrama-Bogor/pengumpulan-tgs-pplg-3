let bilanganBulat = 43
let bilanganPecahan = 3.14

let teks1 = "Hello World"
let teks2 = "Contoh String"

let benar = "true"
let salah = "false"

let tidakAdaNilai = null
let VariabelBelumDiisi;

const simbolUnik = Symbol('Deskripsi Simbol')

console.log(simbolUnik)

let angka = [1, 2, 3, 4, 5]

function tambah(a, b) {
    return a + b
}

console.log(tambah(3, 4))

let siswa = {
    nama: "Ared",
    kelas: "X",
    jurusan: "PPLG"
}

console.log(siswa)

let hasilTambahan = 5 + 3

let hasilPengurangan = 10 - 5

let hasilPerkalian = 3 * 5

let hasilPembagian = 50 / 4

let hasilSisaBagi = 9 % 4

let hasilPerbandingan = 8 > 5

let hasil = 3 + 5 == 7 && 4 + 5 == 9 || true
console.log(hasil)

let nilai1 = ""
let nilai2 = null

let umur = 18
let status = (umur >= 18) ? "Dewasa" : "anak anak"

console.log(status)

if (umur >= 18) {
    status = "dewasa"
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

        break;
    case "merah":
        warnaApa = "Warna kuning"
        break;
    case "hijau":
        warnaApa = "hijau"
    default:
        warnaApa = "Tidak terdefinisi"
        break;
}

console.log(warnaApa)

function sapa(nama) {
    console.log(`halo ${nama}`)
}

sapa('Iqbal')

function calculateGST(productPrice) {
    return productPrice * 0.05
}

console.log(calculateGST(15))
let sum = (a, b) => {
    return a + b
}

alert(sum(1, 2))

const greet = function (nama, kelas) {
    console.log(`hello ${nama}, ${kelas}`)
}

const sayHello = greet
sayHello('Iqbal', 'PPLG XI-3')

function sapa1(nama = "pengunjung") {
    console.log(`Hallo ${nama}`);
}

sapa1()
sapa1('Iqbal')

let jumlah2 = 10;
let hargaSatuan2;
let total = jumlah2 + (hargaSatuan2 || 0);
let harga2 = hargaSatuan2 !== undefined ? hargaSatuan2 : 0;
console.log(harga2);

let hargaSatuan3;
let harga3 = hargaSatuan3 ?? 0;
console.log(harga3);

const numbers = [1, 2, 3, 4, 5];
const doubles = numbers.map((number) => number * 2);

const numbers1 = [1, 2, 3, 4, 5];
const evenNumbers = numbers1.filter((number) => number % 2 === 0);

const sumReduce = numbers1.reduce((accumulator, currentValue) => accumulator + currentValue, 0);

console.log(sumReduce);

const fruits = ['apple', 'banana', 'cherry'];
fruits.forEach((fruit) => console.log(fruit));
    
const fruits2 = ['apple', 'banana', 'cherry'];
fruits2.sort();

const numbers2 = [1, 2, 3, 4, 5];
const result = numbers2.find((number) => number > 3);
console.log(result);


