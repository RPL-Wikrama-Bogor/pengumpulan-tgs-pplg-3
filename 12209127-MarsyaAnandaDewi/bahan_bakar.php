<!DOCTYPE html>
<html>
<head>
    <title>Bahan Bakar</title>
</head>
<body>
<center>
    <h1>Tugas Bahan Bakar</h1>
    <?php
    class Shell {
        public $tipe;
        public $harga;
        public $ppn;

        public function __construct($tipe, $harga, $ppn) {
            $this->tipe = $tipe;
            $this->harga = $harga;
            $this->ppn = $ppn;
        }
    }

    class Beli extends Shell {
        public $jumlah;

        public function hitung_total() {
            $total_sebelum_ppn = $this->harga * $this->jumlah;
            $total_setelah_ppn = $total_sebelum_ppn * (1 + $this->ppn);
            return [$total_sebelum_ppn, $total_setelah_ppn];
        }

        public function cetak_bukti() {
            list($total_sebelum_ppn, $total_setelah_ppn) = $this->hitung_total();
            echo "------------------------------------------------". "<br>";
            echo "Dengan jumlah: {$this->jumlah} Liter<br>";
            echo "Anda membeli bahan bakar minyak tipe {$this->tipe}<br>";
            echo "Total sebelum PPN: Rp. " . number_format($total_sebelum_ppn, 2) . "<br>";
            echo "Total yang harus anda bayar Rp. " . number_format($total_setelah_ppn, 2) . "<br>";
            echo "------------------------------------------------". "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liter = floatval($_POST['liter']);
        $tipeBBM = $_POST['tipe_bbm'];

        $hargaBBM = [
            "Shell Super" => 15420.00,
            "Shell V-Power" => 16130.00,
            "Shell V-Power Diesel" => 18310.00,
            "Shell V-Power Nitro" => 16510.00
        ];

       
        if (array_key_exists($tipeBBM, $hargaBBM)) {
            $bbm = new Beli($tipeBBM, $hargaBBM[$tipeBBM], 0.10);
            $bbm->jumlah = $liter;
            $bbm->cetak_bukti();
        } else {
            echo "Tipe bahan bakar tidak valid!";
        }
    }
    ?>
    <br>
    <form method="post" action="">
        <label for="liter">Masukkan Jumlah Liter:</label>
        <input type="number" name="liter" id="liter" required><br><br>

        <label for="tipe_bbm">Pilih Tipe Bahan Bakar:</label>
        <select name="tipe_bbm" id="tipe_bbm" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br><br>

        <input type="submit" name="submit" value="Beli">
    </form>
    </center>
</body>
</html>