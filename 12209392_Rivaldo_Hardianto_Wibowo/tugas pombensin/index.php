<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pombensin</title>
</head>
<body>
    <h1>Selamat Datang di Pom Shell</h1>
    <form action="fungsi.php" method="post">
        <label for="jenis">Pilih jenis Bensin yang ingin dibeli</label>
        <select name="jenis" id="jenis">
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select>
        <br>
        <label for="liter">Masukan Jumlah Liter bensin yang ingin dibeli</label>
        <input type="number" name="liter" id="liter">
        <br>
        <button type="submit" name="beli">Beli</button>
    </form>
</body>
</html>

<?php


if (isset($_POST['beli'])) {
    $set = $_POST['nama'];

    if ($set == 'Shell Super') {
        
    }

}
?>