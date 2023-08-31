<?php
$t_gram;
$h_sebelum;
$h_setelah;
$diskon;
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
            <label for="t_gram">Masukkan total gram: </label>
            <input type="number" name="gram" id="t_gram"><br>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $t_gram = $_POST['gram'];
    
    $h_sebelum = 500 * $t_gram;
    $diskon = 5 * $h_sebelum / 100;
    $h_setelah = $h_sebelum - $diskon;
    
    echo "Harga awal adalah ".number_format($h_sebelum) . "<br>";
    echo "Anda mendapatkan potongan harga sebesar ".number_format($diskon) . "<br>";
    echo "Ini adalah harga yang harus anda bayar ".number_format($h_setelah) . "<br>";
}
