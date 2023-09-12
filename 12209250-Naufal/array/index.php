<?php
// Membuat Variabel
$nilai = array(80, 78, 72, 84, 92, 88);
$nilai_tertinggi;
$nilai_terkecil;
$jumlah_elemen;
$rata_rata;
$pembulatan;
$update;
$value;

// Menampilkan nilai-nilai dengan keterangan dalam satu baris
echo "Nilai saya : " . implode(", ", $nilai);
echo "<br>";

// Mencari nilai tertinggi
$nilai_tertinggi = max($nilai);
// Menampilkan nilai tertinggi
echo "Dari keseluruhan nilai yang paling tinggi ialah : " . $nilai_tertinggi;
echo "<br>";

// Mencari nilai terkecil
$nilai_terkecil = min($nilai);
// Menampilkan nilai terkecil
echo "Sedangkan nilai yang paling kecil : " . $nilai_terkecil;
echo "<br>";

// Mengurutkan array dari terkecil ke terbesar
sort($nilai);
// Menampilkan nilai-nilai yang sudah diurutkan
echo "Apabila diurutkan dari yang terkecil menjadi: ";
foreach ($nilai as $value) {
    echo $value . ", ";
}
echo "<br>";

// Mengurutkan array dari terbesar ke terkecil
rsort($nilai);
// Menampilkan nilai-nilai yang sudah diurutkan
echo "Apabila diurutkan dari yang terbesar menjadi: ";
foreach ($nilai as $value) {
    echo $value . ", ";
}
echo "<br>";

// Menghitung jumlah nilai dalam array
$total_nilai = array_sum($nilai);

// Menghitung jumlah elemen dalam array
$jumlah_elemen = count($nilai);

// Menghitung rata-rata
$rata_rata = $total_nilai / $jumlah_elemen;

// Memutuskan untuk membulatkan rata-rata
$pembulatan = round($rata_rata);

// Menampilkan rata-rata yang sudah dibulatkan
echo "Apabila dibulatkan, rata rata dari keseluruhan nilai menjadi : " . $pembulatan;
echo "<br>";

// Mencari indeks dari nilai 72 dalam array
$update = array_search(72, $nilai);

// Mengubah nilai 72 menjadi 75
if ($update !== false) {
    $nilai[$update] = 75;
}

// Menampilkan nilai-nilai setelah perubahan
echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai 75. Jadi, nilai saya sekarang : ";
foreach ($nilai as $value) {
    echo $value . ", ";
}

echo "<br>";

// Mengurutkan array dari yang terbesar ke yang terkecil
rsort($nilai);

// Menampilkan nilai-nilai yang sudah diurutkan
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : ";
foreach ($nilai as $value) {
    echo $value . ", ";
}
?>