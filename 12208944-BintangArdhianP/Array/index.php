<?php
$nilai = array(80, 78, 72, 84, 92, 88);
$no = implode(",", $nilai);
echo "Nilai Saya : ", $no . "<br>";

$nilaiTertinggi = max($nilai);
$nilaiTerendah = min($nilai);

echo "Dari keseluruhan nilai yang paling tinggi ialah: " . $nilaiTertinggi . "<br>";
echo "Sedangkan nilai yang paling kecil: " . $nilaiTerendah . "<br>";

sort($nilai);
$b = implode(",", $nilai);
echo "Apbaila di urutkan dari yang terjkecil menjadi : ", $b . "<br>";

arsort($nilai);
$b = implode(",", $nilai);
echo "Apbaila di urutkan dari yang terbesar menjadi : ", $b . "<br>";

$rataRataKeseluruhan = array_sum($nilai) / count($nilai);
for ($i = 0; $i < count($nilai); $i++) 
    $nilai[$i] = round($rataRataKeseluruhan);
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi: " . round($rataRataKeseluruhan) . "<br>"; 

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