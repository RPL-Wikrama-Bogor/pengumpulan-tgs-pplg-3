<?php

$angka = array('80', '78', '72', '84', '92', '88');

$no = implode(", ",$angka);
echo "Nilai saya : " . $no . "<br>";


$max = max($angka);
echo "Dari keseluruhan nilai yang paling tinggi adalah : " . $max . "<br>";

$min = min($angka);
echo "Sedangkan nilai yang paling kecil adalah : " . $min . "<br>";

sort($angka);
$so = implode(", ",$angka);
echo "Apabila di urutkan dari yang terkecil menjadi : " . $so . "<br>";

arsort($angka);
$so = implode(", ",$angka);
echo "Apabila di urutkan dari yang terbesar menjadi : " . $so . "<br>";

$rata = array_sum($angka)/count($angka);
echo "Apabila dibulatkan rata-rata dari keseluruhan nilai saya menjadi : " . round($rata) . "<br>";

$angka = array('80', '78', '72', '84', '92', '88');
echo "Setelah melakukan perbaikan untuk nilai " . $angka[2];
$a2=array('75');
array_splice($angka,2,0,$a2);
echo ", saya mendapatkan nilai " . $angka[2] . ". jadi <br>";
$no = implode(", ",$angka);
echo "Nilai saya sekarang : " . $no . "<br>";

arsort($angka);
$so = implode(", ",$angka);
echo "Sehingga sekarang, urutan nilai saya adalah : " . $so . "<br>";

?>