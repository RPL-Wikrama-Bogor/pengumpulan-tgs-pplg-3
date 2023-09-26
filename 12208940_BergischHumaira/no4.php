<?php
$nama;
$tunjangan;
$pajak;
$gaji_bersih;
$gaji_pokok;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gaji Karyawan</h1>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="name">Nama Anda:</label>
            <input type="text" name="nama" id="name">
        </div>

        <div style="display: flex; margin-bottom: 15px;">
            <label for="gaji_pokok">Gaji Pokok:</label>
            <input type="number" name="gaji" id="gaji_pokok">
        </div>

        <button type="submit" name="submit">Kirim</button>

    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    $nama = $_POST['nama'];
    $gaji_pokok = $_POST['gaji'];

    $tunjangan = (20 * $gaji_pokok) / 100;
    $pajak = (15 * ($gaji_pokok + $tunjangan)) / 100;
    $gaji_bersih = $gaji_pokok + $tunjangan - $pajak;

    echo "Nama : " . $nama . "<br>";
    echo "Tunjangan : Rp." . number_format($tunjangan) . "<br>";
    echo "Pajak : Rp." . number_format($pajak) . "<br>";
    echo "gaji bersih : Rp." . number_format($gaji_bersih) . "<br>";
}