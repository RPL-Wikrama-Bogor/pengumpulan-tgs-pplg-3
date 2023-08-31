<!DOCTYPE html>
<html>
<head>
    <title>Konversi Waktu ke Detik</title>
</head>
<body>
    <h2>Konversi Waktu ke Detik</h2>   
    <form method="post" action="">
        <label for="jam">Jam:</label>
        <input type="number" id="jam" name="jam" min="0"><br><br>
        <label for="menit">Menit:</label>
        <input type="number" id="menit" name="menit" min="0" max="59"><br><br>
        <label for="detik">Detik:</label>
        <input type="number" id="detik" name="detik" min="0" max="59"><br><br>
        <input type="submit" value="Konversi ke Detik">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        // Menghitung total detik
        $total = ($jam * 3600) + ($menit * 60) + $detik;

        echo "<p>Waktu: $jam jam $menit menit $detik detik</p>";
        echo "<p>Total Detik: $total detik</p>";
    }
    ?>