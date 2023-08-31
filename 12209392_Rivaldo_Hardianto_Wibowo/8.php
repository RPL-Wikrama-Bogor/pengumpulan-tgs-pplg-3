<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memecahkan satuan</title>
</head>
<body>
    <form action="" method="post">
        <label for="bilangan">masukan bilangan</label>
        <input type="number" name="bilangan" id="bilangan">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>

<?php
$bilangan;
$bil_sat;
$bil_pul;
$bil_rat;

if (isset($_POST['submit'])) {
    $bilangan = $_POST['bilangan'];

    $bil_sat = $bilangan % 10;
    $bil_pul = ($bilangan / 10) %10;
    if ($bilangan >= 100) {
        $bil_rat = floor($bilangan / 100);
        echo "hasil dari bilangan " . "<b>". $bilangan . "</b>". " ialah";
        echo "<br>";
        echo "bilangan ratusan ialah : " . $bil_rat;
        echo "<br>";
    }

    echo "bilangan puluhan ialah : " . $bil_pul;
    echo "<br>";
    echo "bilangan satuan ialah : " . $bil_sat;
    
}
?>