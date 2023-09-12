<?php 
$nilai = [80, 78, 72, 84, 92, 88];

echo "nilai saya adalah : <b>". implode(", ", $nilai) . "</b>";
echo "<br>";
echo "nilai tertinggi saya adalah : <b>". max($nilai) . "</b>";
echo "<br>";
echo "nilai terkecil saya adalah : <b>". min($nilai) . "</b>";
echo "<br>";

sort($nilai);
echo "jika diurutkan dari yang terkecil : <b>". implode(", ", $nilai) . "</b>";
echo "<br>";
rsort($nilai);
echo "jika diurutkan dari yang terbesar : <b>". implode(", ", $nilai) . "</b>";
echo "<br>";

$rata_rata = array_sum($nilai) / count($nilai);
echo "nilai rata-rata saya adalah : <b>" . floor($rata_rata) . "</b>";
echo "<br>";
?>

<?php
$nilai = [80, 78, 72, 84, 92, 88];

echo "setelah melakukan perbaikan nilai : <b>" . $nilai[2] . "</b> saya mendapatkan nilai <b>75</b>, ";
echo "<br>";
$nilai[2] = 75;
echo "maka nilai saya adalah sekarang adalah : <b>". implode(", ", $nilai) . "</b>";
echo "<br>";
rsort($nilai);
echo "jika diurutkan dari yang terbesar maka nilai saya sekarang adalah : <b>". implode(", ", $nilai) . "</b>";
?>
