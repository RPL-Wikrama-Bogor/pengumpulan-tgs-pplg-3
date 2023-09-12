<?php
// membuat array
$arr = array("80", "78", "72", "84", "92", "88");
$tertinggi;
$terkecil;
$jumlah_elemen;
$rata_rata;
$indeks_72;
$value;

// Menggabungkan elemen array dengan koma
$nilai_saya = "Nilai saya: " . implode(", ", $arr);

// Cetak hasilnya
echo $nilai_saya;
echo "<br>";

// Menggunakan fungsi max()
$tertinggi = max($arr);

// Cetak hasilnya
echo "Nilai tertinggi adalah: " . $tertinggi;
echo "<br>";


// Menggunakan fungsi min()
$terkecil = min($arr);
// Cetak hasilnya
echo "Nilai terkecil adalah: " . $terkecil;
echo "<br>";


// Mengurutkan nilai dari terkecil ke terbesar
sort($arr);
// Mencetak nilai terkecil
echo "Apabila diurutkan dari nilai terkecil mejadi: ";
foreach ($arr as $dariterkecil) {
    echo $dariterkecil . ", ";
}

echo "<br>";

// Mengurutkan nilai dari terbesar ke terkecil
rsort($arr);

// Mencetak nilai terbesar
echo "Apabila diurutkan dari nilai terbesar mejadi: ";
foreach ($arr as $dariterbesar) {
    echo $dariterbesar . ", ";
}

echo "<br>";

// Menghitung jumlah elemen
$jumlah_elemen = count($arr);
// Menghitung total nilai
$total_nilai = array_sum($arr);
// Menghitung rata-rata dan membulatkannya
$rata_rata = round($total_nilai / $jumlah_elemen);
// Cetak hasilnya
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi: " . $rata_rata;



// Mencari indeks dari nilai 72 dalam array
$indeks_72 = array_search(72, $arr);
// Mengubah nilai 72 menjadi 75
if ($indeks_72 !== false) {
    $arr[$indeks_72] = 75;
}
// Menampilkan nilai-nilai setelah perubahan
echo "<br>Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai 75. Jadi, nilai saya sekarang : ";
foreach ($arr as $value) {
    echo $value . ", ";
}


// Mengurutkan array dari yang terbesar ke yang terkecil
rsort($arr);

// Menampilkan nilai-nilai yang sudah diurutkan
echo "<br>Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : ";
foreach ($arr as $value) {
    echo $value . ", ";
}
?>