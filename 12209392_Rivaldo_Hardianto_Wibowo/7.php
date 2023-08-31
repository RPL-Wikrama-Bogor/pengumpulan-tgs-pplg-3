<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung diskon</title>
</head>
<body>
    <form action="" method="post">
        <label for="gram">masukan jumlah gram</label>
        <input type="number" name="gram" id="gram">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>

<?php
$gram;
$hbed;
$d;
$hased;

if (isset($_POST['submit'])) {
    $gram = $_POST['gram'];

    $hbed = 500 * $gram;
    $d = 5 * $hbed / 100;
    $hased = $hbed - $d;

    echo "harga sebelum ialah : " . $hbed;
    echo "<br>";
    echo "diskonnya sebesar : " . $d;
    echo "<br>";
    echo "harga setelah diskon ialah : " . $hased;

}
?>
