<?php 
$nilai_saya = array(80, 78, 72, 84, 92, 88);

$nilai_saya = implode(", ",$nilai_saya);
echo "Nilai saya : <b>" . $nilai_saya . "</b><br>";

$nilai = $nilai_saya = array(80, 78, 72, 84, 92, 88);
$max 	= max($nilai);
$min 	= min($nilai);
echo "Dari keseluruhan nilai yang paling tinggi ialah : " . "<b>" . $max . "</b>";
echo "<br />";
echo "Sedangkan nilai paling kecil : " . "<b>" . $min . "</b></br>";

// echo "Dari keseluruhan nilai yang paling tinggi ialah : " . $nama_saya[4];
echo "Apabila diurutkan dari nilai yang terkecil menjadi : ";
asort($nilai);
echo "<b>" . implode(", ", $nilai) . "<br></b>";
echo "Apabila diurutkan dari nilai yang terbesar menjadi : ";
arsort($nilai);
echo "<b>" . implode(", ", $nilai) . "<br></b>";

$rata = round(array_sum($nilai) / 6 );
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : " . "<b>" . $rata . "</b><br>";

// $nilai_saya1 = array(80, 78, 72, 84, 92, 88);
array_splice($nilai_saya,2,1, 75);
echo "Setelah melakukan perbaikan untuk nilai <b>" . $nilai[2] . " </b>saya mendapatkan nilai <b>" . $nilai_saya[2] . "</b> Jadi nilai saya sekarang : ";
echo "<b>" . implode(", ", $nilai_saya) . "</b>";
echo "<br>";

arsort($nilai_saya);
echo "Setelah diurutkan nilai saya : <b>" . implode(", ", $nilai_saya) . "</b>";


