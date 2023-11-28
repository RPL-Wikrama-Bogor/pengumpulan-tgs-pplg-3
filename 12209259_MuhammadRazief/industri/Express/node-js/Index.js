let bilanganBulat = 43;
let bilanganPecahan = 3.14;

let teks1 = "hello world";
let teks2 = "contoh string";

/* Boolean */
let benar = true;
let salah = false;

/* Null */
let tidakAdaNilai = null;
let variabelBelumDiisi;

/* Symbol = tipe data khusus */
const simbolUnik = Symbol('deskripsi simbol');

console.log(simbolUnik);

let angka = [1, 2, 3, 4, 5];

/* Function (fungsi) */
function tambah(a, b){
    return a + b;
}

console.log(tambah(3, 4)); // Perbaikan: Gunakan () untuk memanggil fungsi

// Object = menyimpan banyak nilai dalam 1 variabel
let siswa = {
    nama: 'Razief',
    kelas: 'XI',
    Jurusan:'PPLG'
};

/* Operator */
let hasilPertambahan = 5 + 3;
let hasilPengurangan = 10 - 5;
let hasilPerkalian = 20 * 3;
let hasilPembagian = 50 / 4;
let hasilSisaBagi =  9 % 4;
let hasil = 3 + 5 == 7 && 4 + 5 == 9 || true;

let angka1 = 5;
angka1 += 5;

let objek = null;
let nilai = objek?.properti;

console.log(nilai);

let umur = 18;
let status = (umur >= 18) ? "Dewasa" : "Anak-anak";

console.log(status);

if(umur >= 18) {
    status = "Dewasa";
} else if(umur >= 12 && umur < 18){
    status = "Remaja";
} else {
    status = "Anak-anak";
}

console.log(status);

let warna = "biru";
let warnaApa;

switch (warna) {
    case "kuning":
        warnaApa= "warna kuning";
        break;
    case "merah":
        warnaApa= "warna merah";
        break;
    case "hijau":
        warnaApa= "warna hijau";
        break; // Perbaikan: Tambahkan break untuk menghentikan eksekusi
    default:
        warnaApa= "tidak terdefinisi";
        break;
}

console.log(warnaApa);

function sapa(nama){
    console.log(`my idola ${nama}`);
}
sapa('Widi');

function calculateGST(productPrice){
    return productPrice * 0.05;
}
console.log(calculateGST(15));

let sum = (a, b) => {
    return a + b;
};

console.log(sum(1, 2));

const greet = function(nama, kelas){
    console.log(`my idola ${nama} kelas ${kelas}`);
};

const sayHello = greet;
sayHello('Widi', '11');

function sapa1(nama = "futsal"){
    console.log(`my idola ${nama}`);
}
sapa1();
sapa1('Widi');

let jumlah2 = 10;

//let total = jumlah2 + (hargaSatuan || 0)

let hargaSatuan2; // Perbaikan: Tambahkan deklarasi variabel hargaSatuan2 jika belum didefinisikan sebelumnya

let harga2 = hargaSatuan2 !== undefined ? hargaSatuan2 : 0;

console.log(harga2);

let hargaSatuan3; // Perbaikan: Tambahkan deklarasi variabel hargaSatuan3 jika belum didefinisikan sebelumnya

let harga3 = hargaSatuan3 ?? 0;

console.log(harga3);

const numbers = [1, 2, 3, 4, 5];

const doubles = numbers.map((number) => number * 2); // Perbaikan: Parameter fungsi map adalah 'number', bukan 'numbers'

const numbers1 = [1, 2, 3, 4, 5];

const evenNumbers = numbers1.filter((number) => number % 2 === 0);

const _numberReduce = [1, 2, 3, 4, 5];
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0); // Perbaikan: Perbaiki fungsi reduce

console.log(_sumReduce);

const fruits = ['apple', 'banana', 'cherry'];
fruits.forEach((fruit) => console.log(fruit)); // Perbaikan: Gunakan () untuk memanggil fungsi

const fruits2 = ['banana', 'cherry','apple'];
fruits2.sort();

const numbers2 = [1, 2, 3, 4, 5];
const result = numbers.find ((number) => number > 3)
console.log(result);

//tugas

const buah = ['apel', 'pisang', 'ceri', 'anggur'];

const buah1 = buah.join(', ');

console.log(buah1);

