<!DOCTYPE html>
<html>
<head>
    <title>Pemisahan Angka (OOP)</title>
</head>
<body>
    <h1>fiori che sbocciano</h1>
    <form method="post" action="">
        Masukkan bilangan bulat: <input type="number" name="bilangan"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    class PemisahanAngka {
        public $bilangan;
        public $satuan;
        public $puluhan;
        public $ratusan;

        public function setBilangan($bilangan) {
            $this->bilangan = $bilangan;
            $this->pemisahAngka();
        }

        public function pemisahAngka() {
            $this->satuan = $this->bilangan % 10;
            $this->puluhan = ($this->bilangan % 100 - $this->satuan) / 10;
            $this->ratusan = ($this->bilangan % 1000 - $this->puluhan * 10 - $this->satuan) / 100;
        }

        public function getSatuan() {
            return $this->satuan;
        }

        public function getPuluhan() {
            return $this->puluhan;
        }

        public function getRatusan() {
            return $this->ratusan;
        }
    }

    if (isset($_POST['hitung'])) {
        $bilangan = $_POST['bilangan'];

        $pemisahanAngkaObj = new PemisahanAngka();
        $pemisahanAngkaObj->setBilangan($bilangan);

        echo "<p>Bilangan $bilangan memiliki:</p>";
        echo "<p>Satuan: " . $pemisahanAngkaObj->getSatuan() . "</p>";
        echo "<p>Puluhan: " . $pemisahanAngkaObj->getPuluhan() . "</p>";
        echo "<p>Ratusan: " . $pemisahanAngkaObj->getRatusan() . "</p>";
    }
    ?>
</body>
</html>
