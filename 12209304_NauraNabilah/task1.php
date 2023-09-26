<?php
$nilaiAku =array (80, 78, 72, 84, 92, 88);

$nilai = implode(",", $nilaiAku);
echo "Nilai saya : ". $nilai . "</br>";


$max = max($nilaiAku);
$min = min($nilaiAku);
echo "</br>Dari keseluruhan nilai yang paling tinggi ialah : ". $max;
echo "</br>";
echo "Sedangkan nilai yang paling kecil : " . $min . "</br>";

asort($nilaiAku);
echo "Apabila diurutkan dari yang terkecil menjadi : ";
print_r(implode(",", $nilaiAku));

arsort($nilaiAku);
echo "<br>Apabila diurutkan dari yang terbesar menjadi : ";
print_r(implode(",", $nilaiAku));

$bulatkan = round(array_sum($nilaiAku) / 6);
echo "</br>Apabila dibulatkan, rata-rata dari keseluruhan nilai saya adalah: ".$bulatkan."<br>";

$nilaiAku2 = array (80, 78, 72, 84, 92, 88);
array_splice($nilaiAku2, 2, 1, 75);
echo "<br> Setelah melakukan perbaikan untuk nilai ".$nilaiAku[2]. ", saya mendapatkan nilai ". $nilaiAku2[2]. " jadi nilai saya sekarang : ";
echo "<b>". implode(",", $nilaiAku2)."<b>";


arsort($nilaiAku2);
echo "<br>Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : ". implode(",", $nilaiAku2);
?>