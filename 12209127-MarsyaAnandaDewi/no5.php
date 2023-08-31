<?php
$jam;
$menit;
$detik;
$total;
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
        <label for="jam">input jam</label>
        <input type="number" name="input_jam">
    </div>
    <div>
        <label for="menit">input menit</label>
        <input type="number" name="input_menit">
    </div>
    <div>
        <label for="detik">input detik</label>
        <input type="number" name="input_detik">
    </div>
    <button type="submit" name="submit">Kirim</button>
 </form>
 <?php
 if (isset($_POST['submit'])) {
    $jam = $_POST['input_jam'];
    $menit = $_POST['input_menit'];
    $detik = $_POST['input_detik'];
    $jam = $jam * 3600;
    $menit = $menit * 60;
    $total = $jam + $menit + $detik;
    echo "totalnya : " . $total . "<br>";
}
 ?>
</body>
</html>