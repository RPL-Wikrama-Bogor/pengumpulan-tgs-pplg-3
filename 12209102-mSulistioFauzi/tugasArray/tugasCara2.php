<?php

$nilai = array(80,78,72,84,92,88);

echo "Nilai Saya : ". $nilai[0].",".$nilai[1].",".$nilai[2].",".$nilai[3].",".$nilai[4].",".$nilai[5];
echo "<br>";

?>

<!-- paling tinggi dan paling kecil -->

<?php
$nilai = array(80,78,72,84,92,88);

$terbesar = max($nilai);
$terkecil = min($nilai);

echo "dari keseluruhan nilai yang paling tinggi : ". $terbesar;
echo "<br>";
echo "sedangkan nilai yang paling kecil : ". $terkecil;
echo "<br>";

?>

<!-- diurutkan dari terkecil -->

<?php

$nilai = array(80,78,72,84,92,88);
sort($nilai);

echo "Apabila diurutkan dari yang terkecil menjadi : " .implode(", ", $nilai);
echo "<br>";

?>

<!-- diurutkan dari yang terbesar -->

<?php

$nilai = array(80,78,72,84,92,88);
rsort($nilai);

echo "Apabila diurutkan dari yang terbesar menjadi : ". implode(", ", $nilai);
echo "<br>";

?>

<!-- Rata-rata -->

<?php

$nilai = array(80,78,72,84,92,88);
$a = array_sum($nilai);
$rata2 = round($a / 6);

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : ". $rata2;
echo "<br>";

?>

<!-- perbaikan -->

<?php

$nilai = array(80,78,72,84,92,88);
$nilai[2] = 75;

echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapatnilai 75, jadi nilai saya sekarang : " . implode(", ", $nilai);
echo "<br>";

?>

<!-- hasil akhir -->

<?php

$nilai = array(80,78,72,84,92,88);
rsort($nilai);

echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : ". implode(", ", $nilai);
echo "<br>";

?>


