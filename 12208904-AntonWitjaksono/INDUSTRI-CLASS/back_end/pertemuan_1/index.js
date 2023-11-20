//integer
let bilanganBUlat = 42;
let bilanganPecahan = 3.14;
//text
let text1 = "hello world";
let text2 = "Hello Gaes";
//bolean
let benar = true;
let salah = false;

//type data khusus :

//null
let tidakAdaNilai = null;

let nilai1 = ""
let nilai2 = null

//undifined
let variableBelumDiIsi;

//sybol
const simbolUnik = Symbol('deskripsi simbol');

//arry=>integer
let angka = [1, 2, 3, 4, 5,]
console.log(angka)

//fungsi return
function tambah(a, b) {
    return a + b
}

// console.log(tambah(3, 4))

//object
let mahasiswa = {
    nama: 'anton',
    usia: 17,
    jurusan: 'PPLG'
}
console.log(mahasiswa)

//operator aritmatika

let hasil1 = 1 + 4
// console.log(hasil1)

let hasi2 = 10 - 6
// console.log(hasi2)

let hasil3 = 10 * 2
// console.log(hasil3)

let hasil4 = 40 / 10
// console.log(hasil4)

// hasil sisa bagi
let hasil5 = 9 % 4
// console.log(hasil5)

//operator perbandingan
let hasilperbandingan1 = 5 == 5
// console.log(hasilperbandingan1)

let hasilperbandingan2 = 5 != 5
// console.log(hasilperbandingan2)

let hasilperbandingan3 = 5 > 7
// console.log(hasilperbandingan3)

let hasilperbandingan4 = 3 < 7
// console.log(hasilperbandingan4)

let hasilperbandingan5 = true && false
// console.log(hasilperbandingan5)

let hasilperbandingan6 = true && false
// console.log(hasilperbandingan6)


let umur = 19
let status = (umur >= 17) ? "Dewasa" : "anak anak"
// console.log(status)

if (umur >= 18) {
    status = "Dewasa"
} else if (umur >= 12 && umur < 18) {
    status = "Remaja"
} else {
    status = "Anak anak"
}
// console.log(status)


let hari = "jumat";
switch (hari) {
    case "senin":
        console.log("jam kerja dimulai dari pukul 07:30 sampai 16:30 dengan penanggung jawab piket : Anisa");
        break;
    case "selasa":
        console.log("Jam kerja dimulai dari pukul 08:00 sampai 17:00 dengan penanggung jawab piket : Berlyn");
        break;
    case "rabu":
        console.log("Jam kerja dimulai dari pukul 08:00 sampai 17:00 dengan penanggung jawab piket : Dani");
        break;
    case "kamis":
        console.log("Jam kerja dimulai dari pukul 08:00 sampai 16:45 dengan penanggung jawab piket : Karina");
        break;
    case "jumat":
        console.log("Jam kerja dimulai dari pukul 07:30 sampai 16:30 dengan penggung jawab piket : Pania");
    default:
        console.log("Hari libur");
}

//function
function sapa(nama) {
    // console.log(`hallo ${nama}`)
}
sapa('anton')


function calculateGST(productPrice) {
    return productPrice * 0.05
}
// console.log(calculateGST(15))

//arrow function
// let sum = (a, b) =>{
//     return a + b
// }
// alert(sum(1,2))

const greet = function (nama, umur, sekolah) {
    console.log(`hello, ${nama} saya berumur ${umur} dan saya bersekolah di ${sekolah}`)
}
const sayHello = greet
sayHello('Anton', '19', 'SMK Wikrama Bogor')


// function sapa1(nama = 'pengunjung', kelas = 'PPLG') {
//     console.log(`Hallo ${nama} saya jurusan ${kelas} `)
// }
// sapa1() //argumen kosong
// sapa1('anton', 'pplg') //argumen terisi

// let jumlah1 = 10
// let total = jumlah1 + (hargaSatuan || 0)
// let harga1 = hargaSatuan1 !== undefined ?
//     hargaSatuan1 : 0
// console.log(harga1)

// let harga = hargaSatuan ?? 0
// console.log(harga)

// 5

// const numbers1 = [1, 2, 3, 4, 5]
// const evenNumbers = numbers1.filter((number) => number % 2 == 0)

const _numberRecuce  = [1,2,3,4,5]
const _sumReduce = _numberRecuce.reduce((accumalator, currentValue) => accumalator + currentValue, 0)
console.log(_sumReduce)

const fruit = ['apple', 'banana', 'cherry'];
fruit.forEach((fruit) => console.log(fruit))

const fruits = ['banana','apple','cherry']
fruits.sort()

const number2 = [1,2,3,4,5]
const result = number2.find((number2) => number2 > 3)
console.log(result  )