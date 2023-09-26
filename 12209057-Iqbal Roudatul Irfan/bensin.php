<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Pembayaran Bensin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            background-color: #ffcc00; /* Warna kuning */
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            border-radius: 8px 8px 0 0;
        }

        .logo {
            width: 120px; /* Sesuaikan ukuran logo */
            height: auto;
            
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-avatar {
            margin-right: 10px;
            width: 38px; /* Sesuaikan ukuran avatar */
            height: 38px; /* Sesuaikan ukuran avatar */
            border-radius: 50%; /* Membuat avatar bulat */
            overflow: hidden; /* Menghilangkan gambar yang terlalu besar */
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Agar gambar avatar mengisi kotak dengan benar */
        
        }

        .user-details {
            text-align: right;
            margin-right: 5px;
        }

        .user-name {
            margin: 0;
            font-weight: bold;
            font-size: 18px;
            color: #000; /* Warna hitam */
        }

        .user-balance {
            margin: 0;
            font-size: 14px;
            color: #777;
        }

        h1 {
            margin: 0;
            color: #0033A0; /* Warna biru seperti Shell */
            font-size: 24px;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        select, input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0033A0; /* Warna biru seperti Shell */
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #001f80;
        }

        .struk {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="asset/logo.png" alt="Logo Perusahaan" class="logo">
        <div class="user-info">
            <div class="user-details">
                <p class="user-name">Iqbal06</p> <!-- Gantilah dengan nama pengguna yang sesuai -->
                <p class="user-balance">Saldo: Rp. 1,000,000</p> <!-- Gantilah dengan saldo yang sesuai -->
            </div>
            <div class="user-avatar">
                <img src="asset/logo2.png" alt="Profil Pengguna"> <!-- Gantilah dengan URL gambar profil -->
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Program Pembelian Bensin</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="jenis_bensin">Jenis Bensin:</label>
                <select name="jenis_bensin" id="jenis_bensin">
                    <option value="Super">Shell Super</option>
                    <option value="V-Power">Shell V-Power</option>
                    <option value="V-Power Diesel">Shell V-Power Diesel</option>
                    <option value="V-Power Nitro">Shell V-Power Nitro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah_liter">Jumlah Liter:</label>
                <input type="number" name="jumlah_liter" id="jumlah_liter" required>
            </div>

            <input type="submit" name="submit" value="Hitung Total Harga">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $jenisBensin = $_POST['jenis_bensin'];
            $jumlahLiter = $_POST['jumlah_liter'];

            class Shell
            {
                const SHELL_SUPER_PRICE = 15420;
                const SHELL_V_POWER_PRICE = 16130;
                const SHELL_V_POWER_DIESEL_PRICE = 18310;
                const SHELL_V_POWER_NITRO_PRICE = 16510;
            }

            class Beli extends Shell
            {
                private $jenisBensin;
                private $jumlahLiter;

                public function __construct($jenisBensin, $jumlahLiter)
                {
                    $this->jenisBensin = $jenisBensin;
                    $this->jumlahLiter = $jumlahLiter;
                }

                public function hitungHargaTotal()
                {
                    $hargaPerLiter = $this->getHargaBensin();
                    $subtotal = $hargaPerLiter * $this->jumlahLiter;
                    $ppn = $subtotal * 0.10; // PPN 10%
                    $totalHarga = $subtotal + $ppn;
                    return $totalHarga;
                }

                private function getHargaBensin()
                {
                    switch ($this->jenisBensin) {
                        case 'Super':
                            return self::SHELL_SUPER_PRICE;
                        case 'V-Power':
                            return self::SHELL_V_POWER_PRICE;
                        case 'V-Power Diesel':
                            return self::SHELL_V_POWER_DIESEL_PRICE;
                        case 'V-Power Nitro':
                            return self::SHELL_V_POWER_NITRO_PRICE;
                        default:
                            return 0;
                    }
                }
            }

            // Membuat objek Beli
            $pembelian = new Beli($jenisBensin, $jumlahLiter);

            // Menghitung total harga
            $totalHarga = $pembelian->hitungHargaTotal();

            // Menampilkan struk pembayaran
            echo "<div class='struk'>";
            echo "<h2>Struk Pembayaran</h2>";
            echo "<p>Jenis Bensin: $jenisBensin</p>";
            echo "<p>Jumlah Liter: $jumlahLiter liter</p>";
            echo "<p>Total Harga (termasuk PPN 10%): Rp. " . number_format($totalHarga, 2, ',', '.') . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="footer">
        &copy; <?php echo date("Y"); ?> Tugas - Iqbal Roudatul Irfan
    </div>
</body>
</html>
