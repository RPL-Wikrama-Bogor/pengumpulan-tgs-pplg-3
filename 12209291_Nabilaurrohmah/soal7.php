<?php
$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;
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
        <label for="input total gram">input total gram</label>
        <input type="number" name="input_total_gram">
    </div>
    <button type="submit" name="submit">Kirim</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $total_gram = $_POST['input_total_gram'];
    $harga_sebelum = 500 * $total_gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;
    echo "harga sebelum : " . $harga_sebelum . "<br>";
    echo "diskonya : " . $diskon . "<br>";
    echo "harga sesudah : " . $harga_setelah . "<br>";
}
?>
</body>
</html>