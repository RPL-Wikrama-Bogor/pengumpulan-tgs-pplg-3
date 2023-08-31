
<?php
class Cuaca {
    public $temperatureFahrenheit;
    public $temperatureCelsius;
    public $cuaca;

    public function setTemperature($temperature) {
        $this->temperatureFahrenheit = $temperature;
        $this->konversiKeCelsius();
        $this->tentukanCuaca();
    }

    public function konversiKeCelsius() {
        $this->temperatureCelsius = ($this->temperatureFahrenheit - 32) * 5 / 9;
    }

    public function tentukanCuaca() {
        if ($this->temperatureCelsius > 30) {
            $this->cuaca = "panas";
        } elseif ($this->temperatureCelsius < 15) {
            $this->cuaca = "dingin";
        } else {
            $this->cuaca = "normal";
        }
    }

    public function getTemperatureCelsius() {
        return floor($this->temperatureCelsius);
    }

    public function getCuaca() {
        return $this->cuaca;
    }
}

$cuacaObj = new Cuaca();

if (isset($_POST['submit'])) {
    $temperatureFahrenheit = $_POST['temperature'];
    $cuacaObj->setTemperature($temperatureFahrenheit);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca (OOP)</title>
</head>
<body>
    <h1>Cek Cuaca (OOP)</h1>
    <form method="post" action="">
        Masukkan temperatur dalam Fahrenheit: <input type="number" name="temperature">
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php if (isset($_POST['submit'])): ?>
        <p>Temperatur dalam Celsius: <?php echo $cuacaObj->getTemperatureCelsius(); ?></p>
        <p>Cuaca: <?php echo $cuacaObj->getCuaca(); ?></p>
    <?php endif; ?>
</body>
</html>
