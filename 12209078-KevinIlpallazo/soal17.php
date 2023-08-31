<!DOCTYPE html>
<html>
<head>
	<title>Biggest Number</title>
</head>
<body>
<h2>20 angka acak dan mencari yang Terbesar</h2>
<?php

$angka = array();
for ($i = 0; $i < 20; $i++) {
  $angka[$i] = rand(0, 10000);
}


echo "Angka pada array: ";
for ($i = 0; $i < count($angka); $i++) {
  echo $angka[$i] . ", ";
}


$angka_terbesar = $angka[0];
for ($i = 1; $i < count($angka); $i++) {
  if ($angka[$i] > $angka_terbesar) {
    $angka_terbesar = $angka[$i];
  }
}


$angka_terkecil = $angka[0];
for ($i = 1; $i < count($angka); $i++) {
  if ($angka[$i] < $angka_terkecil) {
    $angka_terkecil = $angka[$i];
  }
}


echo "<br>";
echo "Angka terbesar pada array: " . $angka_terbesar;
echo "<br>";
echo "Angka terkecil pada array: " . $angka_terkecil;

?>

</body>
</html>


