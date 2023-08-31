<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung celcius</title>
</head>
<body>
    <form action="" method="post">
        <label for="farenhit">masukan suhuh farenheit</label>
        <input type="number" name="farenhit" id="farenhit">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>

<?php
$suhu;
$celcius;

if (isset($_POST['submit'])) {
    $suhu = $_POST['farenhit'];

    $celcius = $suhu /33.8;

    if ($celcius > 300) {
        echo "suhu udara panas";
    }elseif ($celcius > 250) {
        echo "suhu udara dingin";
    }else {
        echo "suhu udara normal";
    }

}
?>