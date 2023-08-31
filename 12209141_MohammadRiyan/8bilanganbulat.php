<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Bilangan <label>Bulat</label></h1>
    <form action="" method="post">
    <div>
            <label for="bilangan">masukan bilangan :</label>
            <input type="number" id="bilangan" name="bilangan">
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>

<?php
    $bilangan;
    $satuan;
    $puluhan;
    $ratusan;
    if (isset($_POST['submit'])) {

        $bilangan = $_POST['bilangan'];

        $satuan= $bilangan % 10;
        $puluhan = floor($bilangan / 10) % 10;
        $ratusan = floor($bilangan / 100);

        echo "<br> ratusan: " . $ratusan . "<br> puluhan: " . $puluhan . "<br> satuan: " . $satuan;
    }
?>
</center>
</body>
</html>