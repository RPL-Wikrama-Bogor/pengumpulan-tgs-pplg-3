<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jam ke detik</title>
</head>
<body>
    <form action="" method="post">
        <label for="jam">masukan jam</label>
        <input type="number" name="jam" id="jam">
        <br>
        <label for="menit">masukan menit</label>
        <input type="number" name="menit" id="menit">
        <br>
        <label for="detik">masukan detik</label>
        <input type="number" name="detik" id="detik">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>

<?php
$j;
$m;
$d;
$total;


if (isset($_POST['submit'])) {
    $j = $_POST['jam'];
    $m = $_POST['menit'];
    $d = $_POST['detik'];

    $j = $j * 3600;
    $m = $m * 60;
    
    $total = $j + $m + $d;

    echo "total detik ialah : " . $total;
}
?>