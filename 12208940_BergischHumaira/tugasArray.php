<?php
$nilaiSaya = array(80, 78, 72, 84, 92, 88);
$nilai = implode(",", $nilaiSaya);
echo "Nilai Saya : <b>" . $nilai."</b>";

$max = max($nilaiSaya);
$min = min($nilaiSaya);
echo "<br> Dari keseluruhan yang paling tinggi adalah : <b>".$max. 
    "</b><br> Sedangkan yang paling kecil adalah : <b>". $min."</b>";

echo "<br>";

asort($nilaiSaya);
echo "Apabila diurutkan dari yang terkecil menjadi : ";
echo "<b>".implode(", ", $nilaiSaya)."</b>";

arsort($nilaiSaya);
echo "<br>Apabila diurutkan dari yang terbesar menjadi : ";
echo "<b>".implode(", ", $nilaiSaya). "</b>";


$rata = round(array_sum($nilaiSaya) / 6);
echo "<br>Apabila dibulatkan, rata-rata dari keseluruhan nilai menjadi : <b>". $rata."</b>";

$nilaiSaya2 = array(80, 78, 72, 84, 92, 88);
array_splice($nilaiSaya2, 2,1,75);
echo "<br>Setelah melakukan perbaikan untuk nilai <b>".$nilaiSaya[2]. "</b>, saya mendapatkan nilai <b>".$nilaiSaya2[2]. "</b> Jadi 
nilai saya sekarang : ";
echo "<b>".implode(", ", $nilaiSaya2)."</b>";

arsort($nilaiSaya2);
echo "<br>Setelah diurutkan nilai saya :  "."<b>".implode(",",$nilaiSaya2)."</b>";
?>