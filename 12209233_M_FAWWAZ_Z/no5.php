<?php

$jam;
$menit;
$detik;
$total_detik;

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
    <h1>Mencari Total Detik</h1>
    <form action="" method="post">
        <div class="">
            <label for="jam">Masukan Jam : </label>
                <input type="number" name="jam" id="jam"><br><br>
        </div>
        <div class="">
            <label for="mwnit">Masukan Menit : </label>
                <input type="number" name="menit" id="menit"><br><br>
        </div>
        <div class="">
            <label for="detik">Masukan Detik : </label>
                <input type="number" name="detik" id="detik"><br><br>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

$jam = $_POST['jam'];
$menit = $_POST['menit'];
$detik = $_POST['detik'];

$jam = $jam * 3600;
$menit = $menit * 60;
$total_detik = $jam + $menit + $detik;

echo "<br>";

echo "Total detik nya adalah " . $total_detik ;


}
?>