<?php

$angka = array(80, 78, 72, 84, 92, 88);

//Mengambil Nilai
$nilai_saya = $angka;

//Mencari Nilai Tertinggi
$nilai_tertinggi = max($angka);

//Mencari Nilai Terkecil
$nilai_terkecil = min($angka);

//Mengurutkan Dari Yang Terkecil
$nilai_dari_terkecil = $angka;
asort($nilai_dari_terkecil);

//Mengurutkan Dari Yang Terbesar
$nilai_dari_terbesar = $angka;
arsort($nilai_dari_terbesar);

// Menghitung rata-rata
$rataRata = array_sum($angka) / count($angka);

//Mengubah Nilai 72

$angka = array(80, 78, 72, 84, 92, 88);
$angka[2] = 75;

$nilai_dari_kecil = $angka;
asort($nilai_dari_kecil);

$nilai_dari_besar = $angka;
arsort($nilai_dari_besar);


echo 'Nilai saya : ' . implode(", ", $nilai_saya) . '<br>';
echo 'Nilai terbesarnya adalah ' . $nilai_tertinggi . '</br>';
echo 'Nilai terkecilnya adalah ' . $nilai_terkecil . '</br>';
echo 'Mengurutkan dari yang terkecil : ' . implode(", ", $nilai_dari_terkecil) . '</br>';
echo 'Mengurutkan dari yang terbesar : ' . implode(", ", $nilai_dari_terbesar) . '</br>';
echo 'Rata rata nya : ' . round($rataRata) . '<br>';
echo 'Setelah nilai 72 di ubah menjadi 75 data saya menjadi :' . '<br>';
echo 'Nilai sekarang : ' . implode(", ", $angka) . '<br>';
echo 'Mengurutkan dari yang terkecil : ' . implode(", ", $nilai_dari_kecil) . '</br>';
echo 'Mengurutkan dari yang terbesar : ' . implode(", ", $nilai_dari_besar) . '</br>';
?>
</body>

</html>