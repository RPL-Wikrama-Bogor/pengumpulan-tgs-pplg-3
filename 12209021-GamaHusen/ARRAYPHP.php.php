<?php
// pembuatan variabel
$nilai = [80, 78, 72, 84, 92, 88];
$nilai_tertinggi;
$nilai_terkecil;
$terbesar_terkecil = [0];
$total;
$replace = $nilai;

// menampilkan nilai
echo "Nilai saya: ";
for ($i = 0; $i < count($nilai); $i++) {
    echo "<strong>$nilai[$i]</strong> ,";
}

// mencari nilai tertinggi
$nilai_tertinggi = max($nilai);
echo "<br> Dari keseluruhan nilai yang paling tinggi ialah: <strong>$nilai_tertinggi</strong>";

// mencari nilai terkecil
$nilai_terkecil = min($nilai);
echo "<br> Sedangkan nilai yang paling kecil adalah : <strong>$nilai_terkecil</strong>";

// diurutkan dari yang terkecil menjadi yang terbesar
echo "<br>Apabila diurutkan dari yang terkecil menjadi: ";
asort($nilai);
foreach ($nilai as $nilai_siswa) {
    echo "<strong>$nilai_siswa, </strong>";
}

// diurutkan dari yang terbesar menjadi yang terkecil
echo "<br> Apabila diurutkan dari yang terbesar menjadi: ";
arsort($nilai);
foreach ($nilai as $nilai_siswa_1) {
    echo "<strong>$nilai_siswa_1, </strong>";
}

// mencari nilai rata-rata
$total = array_sum($nilai);
$total = round($rata_rata = $total / count($nilai));
echo "<br>Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi: <strong>$total</strong>";

// memperbaiki nilai terhadap value tertentu
echo "<br> Setelah melakukan perbaikan untuk nilai <strong>72</strong>, saya mendapatkan nilai <strong>75</strong> jadi nilai saya sekarang: "; array_splice($replace, 2,  1, 75);
foreach ($replace as $nil) {
    echo "<strong>$nil,</strong> ";
}
echo "<br> Sehingga sekarang, urutan nilai dari yang terbesar menjadi: ";
array_splice($nilai, 5, 1,  75);
foreach ($nilai as $key ) {
    echo "<strong>$key,</strong> ";
}
