<?php

$nama = ["Muhammad Razief"];
echo $nama[0];
echo"<br>";
// Nilai awal
$nilai = array(80, 78, 72, 84, 92, 88);
echo "Nilai Saya : " . implode(", ", $nilai) . "<br>";

// Cari nilai paling tinggi
$nilai_tertinggi = max($nilai);
echo "Dari keseluruhan nilai yang paling tinggi : $nilai_tertinggi<br>";

// Cari nilai paling kecil
$nilai_terkecil = min($nilai);
echo "Sedangkan nilai yang paling kecil : $nilai_terkecil<br>";

// Urutkan dari kecil ke besar
sort($nilai);
echo "Apabila diurutkan dari yang terkecil menjadi : " . implode(", ", $nilai) . "<br>";

// Urutkan dari besar ke kecil
rsort($nilai);
echo "Apabila diurutkan dari yang terbesar menjadi : " . implode(", ", $nilai) . "<br>";

//rata-rata
$a = array_sum($nilai);
$rata2 = round($a / 6);
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : ". $rata2;
echo"<br>";

// Perbaikan nilai
$nilai = array(80, 78, 72, 84, 92, 88);
$nilai[2] = 75; // Merubah nilai index ke-2 menjadi 75
echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai 75, jadi nilai saya sekarang : " . implode(", ", $nilai) . "<br>";

// Urutkan dari besar ke kecil setelah perbaikan
rsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : " . implode(", ", $nilai) . "<br>";
?>
