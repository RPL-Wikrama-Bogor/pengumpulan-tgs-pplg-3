<?php

$bilangan;
$satuan;
$puluhan;
$ratusan;


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
    <h1>Mencari Waktu</h1>
    <form action="" method="post">
        <div class="">
            <label for="waktu">Masukan Bilangan : </label>
                <input type="number" name="bilangan" id="bil"><br><br>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

$bilangan = $_POST['bilangan'];

        $satuan = $bilangan % 10;
        $puluhan = floor($bilangan / 10) % 10;
        $ratusan = floor ($bilangan / 100);

        echo "<h2>Hasil Konversi</h2>";
        echo "$satuan Satuan $puluhan Puluhan $ratusan Ratusan";
    }
    ?>
