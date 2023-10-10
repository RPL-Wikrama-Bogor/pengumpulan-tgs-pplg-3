<?php
// Array awal nilai Anda
$nilai_saya = array(80, 78, 72, 84, 92, 88);

// Menampilkan nilai awal
echo "Nilai saya: " . implode(",", $nilai_saya) . "<br>";

// Mencari nilai tertinggi
$nilai_tertinggi = max($nilai_saya);
echo "Dari keseluruhan nilai, yang paling tinggi adalah: " . $nilai_tertinggi . "<br>";

// Mencari nilai terendah
$nilai_terendah = min($nilai_saya);
echo "Sedangkan yang paling kecil adalah: " . $nilai_terendah . "<br>";

// Mengurutkan nilai dari yang terkecil
sort($nilai_saya);
echo "Apabila diurutkan dari yang terkecil menjadi: " . implode(",", $nilai_saya) . "<br>";

// Mengurutkan nilai dari yang terbesar
rsort($nilai_saya);
echo "Apabila diugrutkan dari yang terbesar menjadi: " . implode(",", $nilai_saya) . "<br>";

// Menghitung rata-rata
$rata_rata = round(array_sum($nilai_saya) / count($nilai_saya));
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi: " . $rata_rata . "<br>";

// Mengganti nilai 72 menjadi 75
$nilai_saya = array(80, 78, 72, 84, 92, 88);
$nilai_saya[array_search(72, $nilai_saya)] = 75;
echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai 75 jadi nilai saya sekarang: " . implode(",", $nilai_saya) . "<br>";

// Mengurutkan nilai setelah perbaikan dari yang terbesar
rsort($nilai_saya);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi: " . implode(",", $nilai_saya) . "<br>";
?>  