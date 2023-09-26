<?php
$angka = array("80","78","72","84","92","88");

 echo "Nilai Saya : ";
foreach ($angka as $ang) {
    echo  $ang . ",";
}
echo "<br>";
$max = max($angka);
$min = min($angka);
echo "Dari keseluruhan nilai yang paling tinggi ialah : ";
echo $max;
echo "<br>";
echo "Dari keseluruhan nilai yang paling kecil ialah : ";
echo $min;
echo "<br>";

echo "Apabila diurutkan dari yang terkecil menjadi :";
asort($angka);
foreach ($angka as $ka) {
    echo $ka . ",";
}

echo "<br>";

echo "Apabila diurutkan dari yang terbesar menjadi :";

arsort($angka);
foreach ($angka as $a) {
    echo $a . ",";
}

echo "<br>";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : ";
$rata = array_sum($angka) / 6;
echo(round($rata));

echo "<br>";

$angkaa = array("80","78","72","84","92","88");
echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapatkan nilai 75. jadi";
echo "<br>";
$angkaa[2] = "75";

echo "nilai saya sekarang : " ;
foreach ($angkaa as $y) {
    echo $y .",";
} 

echo "<br>";

echo "sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : ";
arsort($angkaa);
foreach ($angka as $l) {
    echo $l . ",";
}

?>