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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari Angka Satuan, Puluhan, Ratusan</h1>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="bilangan">Input Bilangan : </label>
            <input type="number" name="bil" id="bilangan">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$bilangan = $_POST['bil'];

$satuan = $bilangan % 10;
$puluhan = ($bilangan / 10) % 10;
$ratusan = $bilangan / 100;

echo "Bilangan yang diinput : " . $bilangan . "<br>";
echo "Ratusan  :" . floor($ratusan) . "<br>";
echo "Puluhan : " . $puluhan . "<br>";
echo "Satuan : " . $satuan . "<br>";
}