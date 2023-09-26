<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Gaji Karyawan</title>
</head>
<body>
    <h2>Perhitungan Gaji Karyawan</h2>
    <form method="post" action="">
        <label for="nama">Nama Karyawan:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" id="gaji_pokok" name="gaji_pokok"><br><br>
        <input type="submit" value="Hitung Gaji">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        // Menghitung tunjangan
        $tunj = 0.2 * $gaji_pokok;

        // Menghitung pajak
        $pjk = 0.15 * ($gaji_pokok + $tunj);

        // Menghitung gaji bersih
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        echo "<p>Nama Karyawan: $nama</p>";
        echo "<p>Besar Tunjangan: Rp.$tunj</p>";
        echo "<p>Pajak: Rp.$pjk</p>";
        echo "<p>Gaji Bersih: Rp.$gaji_bersih</p>";
    }
    ?>