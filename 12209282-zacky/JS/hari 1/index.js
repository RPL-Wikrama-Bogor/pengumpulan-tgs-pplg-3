let bilanagnbulat = 42;
let bilanganpecahan = 3.14;

console.log(bilanganpecahan)

//string
let teks1 = 'Halo,World';
let teks2 = 'Contoh String';

console.log(teks1)

//Bolean
let benar = true;
let salah = false;

console.log(benar)

//nul
let tidakAdailai = null;
let variabelbelumdiisi;

let nilai1 = '';
let nilai2 = null;

let angka = [1, 2, 3, 4, 5];

console.log(nilai2)

//function
function tambah(a,b){;
    return a+b
}

let mahasiswa = {
    nama: 'john',
    kelas: 'x',
    jurusan:'PPLG'
}

console.log(mahasiswa)

//operator
let hasil = 5 + 3;
//tambah
let hasil1 = 4-3;
//kurang
let hasil2 = 8 * 7;
//kali
let hasil3 = 9/3;
//bagi
let hasil4 = 50 % 4
//modulus

//perbandingan
let hasil5 = 10 == 5;
//samadengan
let hasil6 = 100 != 5;
//tidak samadengan
let hasil7 = 8 > 5;
//lebih besar
let hasil8 = 3 < 7;
//lebih kecil

console.log(hasil4)
let hasil9 = 5 && 7;
let angka1 = 5
angka1 += 3

console.log(angka1)

// objek
let objek = null;
let nilai3 = objek?.properti

let umur = 18;
let status = (umur >= 18) ? "dewasa":"anak-anak"

console.log(status)

//if statement
if (umur >= 18) {
    status = "dewasa"
}else if (umur >= 12 && umur < 18) {
    status = "remaja"
}else{
    status = "anak-anak"
}

console.log(status)

//switch statement
let warna = "merah"
let warnaApa
switch (warna) {
    case "kuning":
        warnaApa = "warna kuning"      
        break;
    case "merah":
        warnaApa = "warna merah "      
        break;   
    case "hijau":
        warnaApa = "warna hijau"      
        break;      
    default:
        warnaApa = "tidak terdefinisi"
        break;
}

console.log(warnaApa)

function sapa(nama) {
    console.log(`halo ${nama} `);
}
sapa('zacky')

function calculateGST(productPrice) {
    return productPrice * 0.05;
}

console.log(calculateGST(15))

//alert
let sum = (a, b) => {
    return a + b
}

//alert(sum(1, 2));
console.log(sum(3, 4));

//function
const greet = function (nama, kelas) {
    console.log(`helo, ${nama}, kelas ${kelas}`);
}

const sayHello = greet
sayHello('zacky', '11')

function sapa1(nama = "pengunjung" ) {
    console.log(`halo, ${nama}`);   
}
sapa1()
sapa1('zacky')

let jumlah1 = 10
let hargasatuan
let total = jumlah1 + (hargasatuan || 0 )

console.log(total);

let harga = hargasatuan !== undefined ?
hargasatuan : 0

console.log(harga);

let hargasatuan3
let harga3 = hargasatuan3 ?? 0 

console.log(harga3);

//map
const numbers = [1, 2, 3, 4, 5]

const doubles = numbers.map((numbers) => numbers*2)

console.log(doubles);

//filter
const number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

const evenNumbers = number.filter((number) => number % 2 === 0 )

console.log(evenNumbers);

//reduce
const _numbers = [1, 2, 3, 4, 5]

const _sumReduce = _numbers.reduce((accumulator, currentvalue) => accumulator + currentvalue)

console.log(_sumReduce);

//foreach
const fruits = ['banana', 'cherry', 'apple']

fruits.sort();

fruits.forEach((fruits) => console.log(fruits));

//find
const number1 = [1, 2, 3, 4, 5, 6, 7, 8, 9]

const result = number1.find((number1) => number1 > 3 );

console.log(result);