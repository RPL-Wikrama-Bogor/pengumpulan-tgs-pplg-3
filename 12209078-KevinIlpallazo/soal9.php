<?php
if (isset($_POST['submit'])) {
    $temperatureFahrenheit = $_POST['temperature'];

    // Konversi temperatur dari Fahrenheit ke Celsius
    $temperatureCelsius = ($temperatureFahrenheit - 32) * 5 / 9;

    if ($temperatureCelsius > 30) {
        $cuaca = "panas";
    } elseif ($temperatureCelsius < 15) {
        $cuaca = "dingin";
    } else {
        $cuaca = "normal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>
</head>
<body>
    <h1>Cek Cuaca</h1>
    <form method="post" action="">
        Masukkan temperatur dalam Fahrenheit: <input type="number" name="temperature">
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php if (isset($cuaca)): ?>
        <p>Temperatur dalam Celsius: <?php echo floor($temperatureCelsius); ?></p>
        <p>Cuaca: <?php echo $cuaca; ?></p>
    <?php endif; ?>
</body>
</html>
