<?php
// Array awal nilai Anda
$nilai_saya = array(80, 78, 72, 84, 92, 88);

// Menampilkan nilai awal
echo "Nilai saya: <strong>" . implode(",", $nilai_saya) . "</strong><br>";

// Mencari nilai tertinggi
$nilai_tertinggi = max($nilai_saya);
echo "Dari keseluruhan nilai, yang paling tinggi adalah : <strong>" . $nilai_tertinggi . "</strong><br>";

// Mencari nilai terendah
$nilai_terendah = min($nilai_saya);
echo "Sedangkan yang paling kecil adalah : <strong>" . $nilai_terendah . "</strong><br>";

// Mengurutkan nilai dari yang terkecil
sort($nilai_saya);
echo "Apabila diurutkan dari yang terkecil menjadi : <strong>" . implode(",", $nilai_saya) . "</strong><br>";

// Mengurutkan nilai dari yang terbesar
rsort($nilai_saya);
echo "Apabila diurutkan dari yang terbesar menjadi : <strong>" . implode(",", $nilai_saya) . "</strong><br>";

// Menghitung rata-rata
$rata_rata = round(array_sum($nilai_saya) / count($nilai_saya));
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <strong>" . $rata_rata . "</strong><br>";

// Mengganti nilai 72 menjadi 75
$nilai_saya = array(80, 78, 72, 84, 92, 88);
$nilai_saya[array_search(72, $nilai_saya)] = 75;
echo "Setelah melakukan perbaikan untuk nilai <strong>72</strong>, saya mendapat nilai <strong>75</strong> jadi nilai saya sekarang : <strong> " . implode(",", $nilai_saya) . "</strong><br>";

// Mengurutkan nilai setelah perbaikan dari yang terbesar
rsort($nilai_saya);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <strong>" . implode(",", $nilai_saya) . "</strong><br>";
?>
