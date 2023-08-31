<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Waktu (OOP)</title>
</head>
<body>
    <h2>Konversi Detik ke Waktu (OOP)</h2>
    <form method="post" action="">
        <label for="total_detik">Total Detik:</label>
        <input type="number" id="total_detik" name="total_detik" min="0"><br><br>
        <input type="submit" value="Konversi ke Waktu">
    </form>
</body>
</html>

<?php
class KonversiDetikKeWaktu {
    public $totalDetik;
    public $jam;
    public $menit;
    public $detik;

    public function setTotalDetik($totalDetik) {
        $this->totalDetik = $totalDetik;
        $this->konversiKeWaktu();
    }

    public function konversiKeWaktu() {
        $this->jam = floor($this->totalDetik / 3600);
        $sisa_detik = $this->totalDetik % 3600;
        $this->menit = floor($sisa_detik / 60);
        $this->detik = $sisa_detik % 60;
    }

    public function getJam() {
        return $this->jam;
    }

    public function getMenit() {
        return $this->menit;
    }

    public function getDetik() {
        return $this->detik;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_detik = $_POST['total_detik'];

    $konversiObj = new KonversiDetikKeWaktu();
    $konversiObj->setTotalDetik($total_detik);

    echo "<p>Total Detik: $total_detik detik</p>";
    echo "<p>Waktu: " . $konversiObj->getJam() . " jam " . $konversiObj->getMenit() . " menit " . $konversiObj->getDetik() . " detik</p>";
}
?>
