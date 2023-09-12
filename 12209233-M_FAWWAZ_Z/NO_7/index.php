<?php

$berat;
$harga_sebelum;
$harga_setelah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari nilai terbesar</h1>
    <form action="" method="post">
        <div class="">
            <label for="berat">Masukan Berat Gram: </label>
                <input type="text" name="berat" id="berat"><br><br>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $berat = $_POST['berat'];
    $harga_per_kg = 5000;
    $diskon_persen = 5;

    $harga_sebelum = ($berat / 1000) * $harga_per_kg;
    $diskon = ($diskon_persen / 100) * $harga_sebelum;
    $harga_setelah  = $harga_sebelum - $diskon;

    echo "<h2>Hasil Perhitungan</h2><br>";

    echo "Total Harga Sebelum Diskon : " . number_format($harga_sebelum, 2, '.', ',') . " rupiah<br>";
    echo "Diskon (" . $diskon_persen . "%) : " . number_format($diskon, 2, '.', ',') . " rupiah<br>";
    echo "Total Harga Setelah Diskon : " . number_format($harga_setelah, 2, '.', ',') . " rupiah";
}

?>