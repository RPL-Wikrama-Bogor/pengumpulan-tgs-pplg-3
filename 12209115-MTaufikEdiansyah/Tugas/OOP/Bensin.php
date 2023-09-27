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

        public function tampilkan_bukti() {
            list($total_sebelum_ppn, $total_setelah_ppn) = $this->hitung_total();
            echo "Dengan jumlah: {$this->jumlah} Liter<br>";
            echo "Anda membeli bahan bakar minyak tipe {$this->tipe}<br>";
            echo "Total sebelum PPN: Rp. " . number_format($total_sebelum_ppn, 2) . "<br>";
            echo "Total yang harus anda bayar Rp. " . number_format($total_setelah_ppn, 2) . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian BBM</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image:url('img/Background.png');
            background-size:cover; 
            color:#fff;
        }

        h1 {
            color: #fff;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.2);
        }

        label, input, select {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.2);
        }

        input[type="submit"] {
            background: #0E21A0;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background: #0E21A0;
        }

        .summary {
            margin-top: 30px;
            border: 1px solid #ccc;
            padding: 10px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <br>

    <form method="post" action="">
        <h1>Bahan Bakar</h1>
        <br>
        <label for="liter">Masukkan Jumlah Liter:</label>
        <input type="number" name="liter" id="liter" required><br><br>

        <label for="tipe_bbm">Pilih Tipe Bahan Bakar:</label>
        <select name="tipe_bbm" id="tipe_bbm" required>
            <option value="">---Pilih Bahan Bakar---</option>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br><br>

        <input type="submit" name="submit" value="Beli">
    </form>

    <?php
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

            $result = $bbm->hitung_total();

            echo '<div class="summary">';
            echo "<h2>Teransaksi</h2>";
            echo "Anda membeli bahan bakar  tipe {$tipeBBM}<br>";
            echo "Dengan jumlah: {$liter} Liter<br>";
            echo "Total sebelum PPN: Rp. " . number_format($result[0], 2) . "<br>";
            echo "Total yang harus anda bayar Rp. " . number_format($result[1], 2) . "<br>";
            echo '</div>';
        } else {
            echo "Tipe bahan bakar tidak valid!";
        }
    }
    ?>

</body>
</html>
