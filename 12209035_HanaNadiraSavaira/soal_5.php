<!DOCTYPE html>
<html>
<head>
    <title>Konversi Waktu ke Detik</title>
</head>
<body>
    <h2>Konversi Jam-Menit-Detik ke Total Detik</h2>
    <form method="post" action="">
        Jam: <input type="number" name="jam" required><br>
        Menit: <input type="number" name="menit" required><br>
        Detik: <input type="number" name="detik" required><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        $total = ($jam * 3600) + ($menit * 60) + $detik;

        echo "Total detik: " . $total . " detik";
    }
    ?>
</body>
</html>