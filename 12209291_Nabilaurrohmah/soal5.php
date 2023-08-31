<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu</title>
</head>
<body>
    <form action="#" method="post">
        <label for="jam">
        <input type="text" name="jam"><br><br>
        <label for="menit">
            <input type="number" name="menit"><br><br>
        <label for="detik">
            <input type="number" name="detik">
            <button name="submit">Submit</button> <br>

    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    
$jam = $_POST['jam'];
$menit = $_POST['menit'];
$detik = $_POST['detik'];

$jam = $jam *3600;
$menit = $menit *60;

echo $jam + $menit + $detik . "detik";
}

?>