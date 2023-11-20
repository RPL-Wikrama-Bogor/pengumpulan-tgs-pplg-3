<?php
$nilai = ['80', '78', '72', '84', '92', '88'];
$tampil = implode(", ",$nilai);
echo 'Nilai Saya:  ' .$tampil;
echo "<br>";      
$max 	= max($nilai);
echo 'Dari keseluruhan nilai yang paling tinggi ialah: ' . $max;
echo "<br>";      
$min 	= min($nilai);
echo 'Sedangkan nilai yang paling kecil: ' . $min;
echo "<br>";

$nilai_saya = $nilai = array('80', '78', '72', '84', '92', '88');
asort($nilai_saya);
echo 'Apabila diurutkan dari yang terkecil menjadi:';
print_r(implode(", ", $nilai_saya));
echo "<br>";
arsort($nilai_saya  );
echo 'Apabila diurutkan dari yang terbesar menjadi:';
print_r(implode(", ", $nilai_saya));
echo "<br>";

$rata = round(array_sum($nilai_saya) /6);
echo 'Apabila di bulatkan,rata-rata dari keseluruhan nilai saya menjadi: ' . $rata;

$angka = array('80', '78', '72', '84', '92', '88');
echo "Setelah melakukan perbaikan untuk nilai " . $angka[2];
$p=array('75');
array_splice($angka,2,0,$p);
echo ", saya mendapatkan nilai " . $angka[2] . ". jadi <br>";
$per= implode(", ",$angka);
echo "Nilai saya sekarang : " . $per . "<br>";

arsort($angka);
$ur = implode(", ",$angka);
echo "Sehingga sekarang, urutan nilai saya adalah : " . $ur . "<br>";
?>
