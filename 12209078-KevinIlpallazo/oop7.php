<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Jeruk (OOP)</title>
</head>
<body>
    <h2>Kalkulator Harga Jeruk (OOP)</h2>
    
    <form method="post" action="">
        <label for="berat_jeruk">Berat Jeruk (gram):</label>
        <input type="number" id="berat_jeruk" name="berat_jeruk" min="0"><br><br>
        <input type="submit" value="Hitung Harga">
    </form>
</body>
</html>

<?php
class KalkulatorHargaJeruk {
    public $beratJerukGram;
    public $hargaPerKg;
    public $diskon;

    public function __construct() {
        $this->hargaPerKg = 500; // 500 rupiah per 100 gram
        $this->diskon = 0.05; // 5%
    }

    public function setBeratJeruk($berat) {
        $this->beratJerukGram = $berat;
    }

    public function hitungTotalSebelumDiskon() {
        return ($this->beratJerukGram / 1000) * $this->hargaPerKg;
    }

    public function hitungBesarDiskon() {
        return $this->hitungTotalSebelumDiskon() * $this->diskon;
    }

    public function hitungTotalSetelahDiskon() {
        return $this->hitungTotalSebelumDiskon() - $this->hitungBesarDiskon();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat_jeruk_gram = $_POST['berat_jeruk'];

    $kalkulatorObj = new KalkulatorHargaJeruk();
    $kalkulatorObj->setBeratJeruk($berat_jeruk_gram);

    echo "<p>Berat Jeruk: $berat_jeruk_gram gram</p>";
    echo "<p>Total Harga Sebelum Diskon: " . number_format($kalkulatorObj->hitungTotalSebelumDiskon(), 2) . " rupiah</p>";
    echo "<p>Besar Diskon: " . number_format($kalkulatorObj->hitungBesarDiskon(), 2) . " rupiah</p>";
    echo "<p>Total Harga Setelah Diskon: " . number_format($kalkulatorObj->hitungTotalSetelahDiskon(), 2) . " rupiah</p>";
}
?>
