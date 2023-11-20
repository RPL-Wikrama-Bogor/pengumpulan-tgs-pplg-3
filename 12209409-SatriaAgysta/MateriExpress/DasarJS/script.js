let bilanganbulat = 314;
let bilanganpecah = 3.14;

let teks1 = 'halo'
let teks2 = "hai"

let benar = true
let salah = false

let TakBernilai = null;
let varibletanpaisi;

const uniquesymbol = Symbol('desc symbol')
console.log(uniquesymbol)

let angka = [1, 2, 3, 4, 5]

let nilai = ""
let nilai1 = null;

function tambah(a, b) {
    return a + b
}
console.log(tambah(3, 4))

let mahasiswa = {
    nama: 'Constantine',
    kelas: 'X',
    jurusan: 'RPL'
}

let pertambahan = 5 + 3
let pengurangan = 10 - 5
let perkalian = 5 * 2
let pembagian = 50 / 4
let modulus = 9 % 2
let hasil = 3 + 5 == 1 && 3 + 6 == 9 || true

let angka1 = 5;
angka1 += 5

let objek = null
let nislai = objek?.properti;
console.log(nislai)


let hasli = 10 != 5;
let besar = 8 > 5;
let kecil = 3 < 6;

let umur = 18
let ststus  = (umur>=18) ? "Dewasa" : "Anak anak"
console.log(ststus)

let umurs = 17
if( umurs >= 18) {
 status = "dewasa"
} else if(umur < 18) {
 status = "anak anak"
} else {
 status = "anak anak"
}
console.log(status)

let warna = "merahs"
let warnaApa
switch (warna) {
    case "kuning" :
        warnaApa = "warna kuning"
         break;
    case "hijau" :
        warnaApa = "warna hijau"
        break;
    case "merah" :
        warnaApa = "warna merah"
        break;
    default:
        warnaApa = "gatau bang"
        break;
}

console.log(warnaApa)

function sapa(nama) {
    console.log(`alo ${nama}`)
}
sapa('pekin')

function calculateTax(productPrice) {
    return productPrice * 0.5
}

console.log(calculateTax(100000))

let sum = (a, b) => {
    return a + b
}
//alert(sum(1, 2))

const greet = function(nama, kelas){
    console.log(`hello, ${nama} kamu kelas ${kelas}`)
}
const sayHello = greet
sayHello('jamal', '11')

function sapa1(nama = "Pengunjung") {
    console.log(`Halo ${nama}`)
}
sapa1()
sapa1('pekin')

//let jumlah2 = 10
//let total = jumlah2 + (hargasatuan || 0)
let hargasatuan2;
let harga2 = hargasatuan2 !== undefined ?
hargasatuan2 : 0

console.log(harga2)

let hargasatuan3;
let harga3 = hargasatuan3 ?? 0
console.log(harga3)

const numbers = [1, 2, 3, 4, 5]
const double = numbers.map((numbers) => numbers * 2)
console.log(double)

const numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9]
const evennumber = numbers1.filter((numbers1) => numbers1 % 2 === 0)
console.log(evennumber)

const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) =>
accumulator + currentValue, 0)
console.log(_sumReduce)

const fruits = ['apple', 'orange', 'peach', 'grape'];
fruits.forEach((fruit) => console.log(fruit));

const buah = ['apple', 'orange', 'peach', 'grape'];
buah.sort();
console.log(buah)

const nomor = [1, 2, 3, 4 , 5]
const result = nomor.find((nomor) => nomor > 3)
console.log(result)
