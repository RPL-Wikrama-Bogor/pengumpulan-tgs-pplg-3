<?php
// nilai
$nilai = array(80,78,72,84,92,88);
echo "Nilai Saya : ". $nilai[0].",".$nilai[1].",".$nilai[2].",".$nilai[3].",".$nilai[4].",".$nilai[5];
echo "<br>";

// paling tinggi
$terbesar = max($nilai);
echo "dari keseluruhan nilai yang paling tinggi : ". $terbesar;
echo "<br>";

// paling kecil
$terkecil = min($nilai);
echo "sedangkan nilai yang paling kecil : ". $terkecil;
echo "<br>";

// dari yang terkecil 
sort($nilai);
echo "Apabila diurutkan dari yang terkecil menjadi : ". implode(", ", $nilai);
echo "<br>";

// dari yang terbesar
$rsort = rsort($nilai);
echo "Apabila diurutkan dari yang terbesar menjadi : ". implode(", ",$nilai);
echo "<br>";

// rata rata
$a = array_sum($nilai);
$rata2 = round($a / 6);

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : ". $rata2;
echo "<br>";

?>
<?php
$nilai = array(80,78,72,84,92,88);
//perbaikan
$nilai[2] = 75;

echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapatnilai 75, jadi nilai saya sekarang : " . implode(", ",$nilai);
echo "<br>";

// hasil akhir
rsort($nilai);

echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : ". implode(", ", $nilai);
echo "<br>";
?>