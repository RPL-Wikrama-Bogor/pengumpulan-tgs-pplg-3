let bilanganBulat = 43
let bilanganPecahan = 3.14

let teks1 = 'hello world'
let teks2 = "hi world"

let benar = true
let salah = false

let tiadaNilai = null
let varBelumDiisi;

const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)

let angka = [1,2,3,4,5]

function tambah(a,b) {
    return a + b
} console.log (tambah(3,4))

let siswa = {
    nama: 'Anay',
    kelas: 'XI',
    jurusan: 'PPLG'
}

let nilai1 = ""
let nilai2 = null

let hasilTambah = 5 + 4

let hasilKurang = 5 - 3

let hasilKali = 5 * 9

let hasilBagi = 6 / 2

let hasilSisaBagi = 6 % 2

let hasil = 5 > 3;
let hasil2 = 5 < 3;
let hasil3 = 5 == 5;
let hasil4 = 5 != 4;

angka1 = 4
angka1 += 3
// angka1 = angka1 + 3
console.log(angka1)

let objek = null
let nilai = objek?.properti

console.log(hasil)

let umur = 18
let status = (umur >= 18) ? "Dewasa" : "Anak-anak"

console.log(status)

if (umur >= 18) {
    status="dewasa"
} else if(umur >= 12 && umur < 18) {
    status="remaja"
} else {
    status="anak-anak"
} console.log(status)

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
        warnaApa = "tidak taw"
        break;
} console.log(warnaApa)

function sapa(nama) {
    console.log(`halo ${nama}`)
}
sapa(`Anasya`)

function calculateGST(productPrice) {
    return productPrice * 0.05
} console.log(calculateGST(15))

let sum = (a, b) => {
    return a + b
}
alert(sum(1, 2))

const greet = function(nama, kelas) {
    console.log(`hello, ${nama}, kamu kelas ${kelas}`)
}
const sayHello =  greet
sayHello(`Anasya`, `11`)

function sapa1(nama = "Pengunjung") {
    console.log(`Halo ${nama}`)
}

sapa1() //argumen kosong
sapa1('Anay') //argumen terisi

hargaSatuan = 20
hargaSatuan2 = 20
hargaSatuan3 = 20

let jumlah2 = 10
let total = jumlah2 + (hargaSatuan || 0)

let harga2 = hargaSatuan2 !== undefined ?
hargaSatuan2 : 0
console.log(harga2)

let harga3 = hargaSatuan3 ?? 0
console.log(harga3)

const numbers = [1,2,3,4,5]
const doubles = numbers.map((numbers) => numbers * 2)

const  numbers1 = [1,2,3,4,5]
const evenNumbers = numbers1.filter((number) => number % 2 === 0)

const _numberReduce  = [1,2,3,4,5]
const _sumReduce = _numberReduce.reduce((accmulator, currentValue) => accmulator + currentValue, 0)
console.log(_sumReduce)

const fruits = ['apel', 'mangga', 'nanas'];
fruits.forEach((fruit) => console.log(fruit));

const fruits1 = ['anggur', 'ceri', 'pisang'];
fruits.sort()

const numbers2 = [1,2,3,4,5];
const result = numbers2.find((number) => number > 3);
console.log(result)

const fruits3 = ['apel', 'pisang', 'ceri', 'anggur'];
const string = fruits3.join(', ');
console.log(string);

const people = [
    { name: 'Alice', age: 25 },
    { name: 'Bob', age: 32 },
    { name: 'Charlie', age: 28 },
];

const ages = people.filter((age) => age < 30)
console.log(ages)