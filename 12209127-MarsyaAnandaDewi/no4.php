<?php

$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
$nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="nama">input nama</label>
            <input type="text" name="input_nama">
        </div>
        <div>
            <label for="gaji_pokok">input gaji_pokok</label>
            <input type="text" name="input_gaji_pokok">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
    $nama = $_POST['input_nama'];
    $gaji_pokok = $_POST['input_gaji_pokok'];
    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15 *($gaji_pokok + $tunj)) / 100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    echo "nama : " . $nama . "<br>";
    echo "tunjangan : " . $tunj . "<br>";
    echo "pajak : " . $pjk . "<br>";
    echo "gaji bersih : " . $gaji_bersih . "<br>";
    
    }
    ?>
</body>
</html>