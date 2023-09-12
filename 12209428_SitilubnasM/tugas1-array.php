<?php
$nilai = ["80", "78", "72", "84", "92", "88"];

$nilaia = implode(",", $nilai);
echo "Nilai Saya adalah: ". $nilaia;

$max = max($nilai);
$min = min($nilai);
echo "<br>Dari keseluruhan nilai yang paling tinggi adalah: ". $max . "<br>";
echo "Sedangkan nilai terkecil adalah: ".$min."<br>";

asort($nilai);
echo "Apabila diurutkan dari yang terkecil menjadi: ";
print_r(implode(", ", $nilai));
echo"<br>";

arsort($nilai);
echo "Apabila diurutkan dari yang terbesar menjadi: ";
print_r(implode(", ", $nilai));
echo"<br>";

$rata = round(array_sum($nilai) / 6);
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya adalah: ".$rata."<br>";

$nilai_a = $nilai = ["80", "78", "72", "84", "92", "88"];
array_splice($nilai_a, 2, 1, 75);
echo "Setelah melakukan perbaikan untuk nilai ".$nilai[2]." saya mendapatkan nilai ".$nilai_a[2];
echo "<br>";

echo "Jadi nilai saya sekarang adalah: ";
echo implode(", ", $nilai_a);
echo "<br>";

arsort($nilai_a);
echo "Setelah diurutkan Nilai saya adalah: ".implode(", ", $nilai_a) ;


