<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Bahan Bakar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            width: 500px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px #ccc;
            text-align: left; 
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select,
        input[type="number"],
        input[type="submit"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-top: 20px;
            text-align: left;
            box-shadow: 0px 0px 10px #ccc;
        }

        p {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Pembelian Bahan Bakar</h1>
    <div class="container">
        <form method="post" action="">
            <label for="tipe">Pilih tipe bahan bakar:</label>
            <select name="tipe" id="tipe">
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select><br>
            <label for="jumlah">Masukkan jumlah liter:</label>
            <input type="number" name="jumlah" id="jumlah" step="0.01"><br>
            <input type="submit" value="Hitung Total">
        </form>

        <?php
        class Shell {
            private $tipe;
            private $harga;

            public function __construct($tipe, $harga) {
                $this->tipe = $tipe;
                $this->harga = $harga;
            }

            public function tampilkanRincian($jumlah) {
                $totalHarga = $this->hitungTotalHarga($jumlah);
                $ppn = $this->hitungPpn($jumlah);
                echo "<div class='card'>";
                echo "<p>Anda membeli bahan bakar tipe: " . $this->tipe . "</p>";
                echo "<p>Dengan jumlah: " . $jumlah . " liter</p>";
                echo "<p>PPN (10%): Rp. " . number_format($ppn, 2) . "</p>";
                echo "<p>Total yang harus dibayar: Rp. " . number_format($totalHarga + $ppn, 2) . "</p>";
                echo "</div>";
            }

            public function hitungTotalHarga($jumlah) {
                return $this->harga * $jumlah;
            }

            public function hitungPpn($jumlah) {
                $ppnRate = 0.1; 
                return $this->hitungTotalHarga($jumlah) * $ppnRate;
            }
        }

        class Beli extends Shell {
            public function __construct($tipe, $harga) {
                parent::__construct($tipe, $harga);
            }

            public function masukkanData() {
                if (isset($_POST["jumlah"])) {
                    $jumlah = (float) $_POST["jumlah"];
                } else {
                    $jumlah = 0;
                }
                $this->tampilkanRincian($jumlah);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tipe = $_POST["tipe"];

            $hargaBahanBakar = [
                "Shell Super" => 15420,
                "Shell V-Power" => 16130,
                "Shell V-Power Diesel" => 18310,
                "Shell V-Power Nitro" => 16510
            ];

            if (!array_key_exists($tipe, $hargaBahanBakar)) {
                echo "<p>Tipe bahan bakar tidak valid.</p>";
            } else {
                $beli = new Beli($tipe, $hargaBahanBakar[$tipe]);
                $beli->masukkanData();
            }
        }
        ?>
    </div>
</body>
</html>
