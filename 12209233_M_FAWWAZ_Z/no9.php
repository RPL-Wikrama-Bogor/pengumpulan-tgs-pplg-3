<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca Berdasarkan Temperatur</title>
</head>
<body>
    <h1>Cek Cuaca Berdasarkan Temperatur</h1>
    <form method="post" action="">
        <label for="fahrenheit">Masukkan Temperatur (Fahrenheit):</label>
        <input type="number" id="fahrenheit" name="fahrenheit" required><br><br>
        
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $suhu_fahrenheit = $_POST['fahrenheit'];
        $suhu_celsius = $suhu_fahrenheit - 32 / 1.8 ;
        $suhu = $suhu_celsius;
        
        if ($suhu > 300) {
            echo "Cuaca: Panas";
        } elseif ($suhu < 250) {
            echo "Cuaca: Dingin";
        } else{
            echo "Cuaca: Normal";
        }
    }
    ?>
</body>
</html>

<?php
$suhu_fh;
$celcius;
$dingin;
$normal;
$panas;
?>

