<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian BBM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url(img/pom.jpeg);
            background-size: cover;
            text-align: center;
        }

        .container {
            padding: 20px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(7px);
            color: #fff;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 20px;
        }
        
        input[type="submit"] {
            background-color: #FF1493;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 20px;
        }

        input[type="submit"]:hover {
            background-color: #FF69B4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pembelian BBM</h1>
        <form method="post" action="">
            <label for="liter">Masukkan Jumlah Liter:</label>
            <input type="number" name="liter" id="liter" required><br><br>

            <label for="tipe_bbm">Pilih Tipe Bahan Bakar:</label>
            <select name="tipe_bbm" id="tipe_bbm" required>
                <option value="">Pilih</option>
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select><br><br>

            <input type="submit" name="submit" value="Beli">
        </form>
            <br>    
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
            echo "Anda membeli bahan bakar minyak tipe: {$this->tipe}<br>";
            echo "Dengan jumlah: {$this->jumlah} Liter<br>";
            echo "Total sebelum PPN: Rp. " . number_format($total_sebelum_ppn, 2) . "<br>";
            echo "Total yang harus anda bayar Rp. " . number_format($total_setelah_ppn, 2) . "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liter = floatval($_POST['liter']);
        $tipeBBM = $_POST['tipe_bbm'];

        // Daftar harga bahan bakar
        $hargaBBM = [
            "Shell Super" => 15420.00,
            "Shell V-Power" => 16130.00,
            "Shell V-Power Diesel" => 18310.00,
            "Shell V-Power Nitro" => 16510.00
        ];

        // Periksa apakah tipe bahan bakar yang dimasukkan adalah valid
        if (array_key_exists($tipeBBM, $hargaBBM)) {
            // Inisialisasi objek Beli
            $bbm = new Beli($tipeBBM, $hargaBBM[$tipeBBM], 0.10);
            $bbm->jumlah = $liter;

            // Tampilkan bukti transaksi
            $bbm->tampilkan_bukti();
        } else {
            echo "Tipe bahan bakar tidak valid!";
        }
    }
    ?>

    </div>
</body>
</html>
