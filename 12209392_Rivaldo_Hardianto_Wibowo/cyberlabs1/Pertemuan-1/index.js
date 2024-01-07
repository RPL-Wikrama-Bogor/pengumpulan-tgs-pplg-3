    let bilanganBulat = 43;
let bilanganPecahan= 3.14;

let text1 = 'Nama saya adalah Rivaldo Hardianto Wibowo';
let text2 = 'Contoh string';

let Benar = true;
let Salah = false;

let tidakadanilai = null;
let variableBelumDiisi;

const simbolUnik = Symbol('ini simbol coyy');
console.log(simbolUnik);

let nilai1 = "";
let nilai2 = null;

let angka = [1, 2, 3, 4, 5];


function tambah(a=3,b=2) {
    return a+ b;
}

console.log(tambah());



let mahasiswa = {
    nama : 'rivaldo',
    kelas : 'pplg xi-3',
    rayon : 'cicurug 4'
};


let pertambahan = 5 + 5

let pengurangan = 6-4

let perkalian = 5 * 5

let pembagian = 20/4

let sisa_bagi = 9%4

let hasil = 5 == 0

let tidaktrue = 10 != 5

let besar = 8 > 5

let kecil = 2 < 5

let dan = true && false

let nomor = 5 
nomor += 3 


let objek = null 
let nilai = objek?.properti

console.log(nilai); //hasilnya undifined

let umur = 18 
let status = (umur >= 18) ? "dewasa" : "anak-anak"

if (umur >= 18) {
    status = "Remaja"
}else if (umur < 18) {
    status = "bocil"
} else {
    alert('seseorang tersebut adalah anak-anak')
}

console.log(status);

let warna = "Hijau"

let warnaApa

switch (warna) {
    case "Hijau":
        warnaApa = "warna Hijau"
        break;
    case "Merah":
        warnaApa = "warna Merah"
        break;
    case "Ungu":
        warnaApa = "warna Ungu"
        break;

    default:
        alert("warna tidak terdefinisikan")
        break;
}

console.log(warnaApa);


function sapa(nama) {
    console.log(`halo ${nama}`);
}
sapa('Rivaldo')


function kalkulatordis(price) {
    return price * 0.05
}

console.log(kalkulatordis(15));



let sum =(a, b) => {
    return a + b
}

console.log(sum(1,2),"ini yang sum");
// alert(sum(1,2))


const greet = function(nama, rombel, rayon) {
    console.log(`hello saya ${nama}, rombel ${rombel}, rayon ${rayon}`);
}

const sayHello = greet
sayHello('Rivaldo',"PPLG","Cicurug 4")

function sapa1(nama = "guys") {
    console.log(`hallo ${nama}`);
}

sapa1() //argumen kosong
sapa1('Rivaldo') //argumaen terisi



let jumlah2 = 10
let hargaSatuan
let hargaSatuan2

let total =jumlah2 + (hargaSatuan || 0)

let harga2 = hargaSatuan2 !==  undefined ? hargaSatuan2 : 0

console.log(harga2);



let hargaSatuan3
let harga3 =  hargaSatuan3 ?? 0

console.log(hargaSatuan3);



const numbers = [1,2,3,4,5]

const doubles = numbers.map((number) => number * 2)

console.log(doubles);


const numbers1 = [6,7,8,9,10]

const evennumber = numbers1.filter((number) => number % 2 === 0)
console.log(evennumber);


const _numberReduce = [1,2,3,4,5]
const _sumReduce = _numberReduce.reduce((accumulator,currentValue) =>  accumulator + currentValue, 0)
console.log(_sumReduce);


const fruits = ['apple','banana','cherry']
fruits.forEach((fruit) => console.log(fruit))


const fruits1 = ['lo','siento','wilson']
fruits1.sort()

const numbers2 = [1,2,3,5,6]

const result = numbers2.find((number) => number > 3)
console.log(result);



function text() {
    
    document.getElementById('text').innerHTML = text1;
}