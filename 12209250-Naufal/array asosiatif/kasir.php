<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Comfortaa&family=Gluten&family=Nunito:wght@600&family=Sedgwick+Ave+Display&display=swap');
        body {
           font-family: 'Comfortaa', cursive;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: red;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h3 {
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 15px;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        input[type="submit"] {
            background-color: red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 20px;
           font-family: 'Comfortaa', cursive;
        }

        input[type="submit"]:hover {
            background-color: #800000;
        }

        h3,
        p {
            margin: 0;
        }

        .hasil {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .input-box {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-top: 5px;
        }

        /* Tambahkan gaya untuk tabel menu */
        .menu-table {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .menu-table table {
            width: 100%;
        }

        .menu-table th,
        .menu-table td {
            padding: 10px;
            text-align: center;
        }

        .menu-table th {
            background-color: red;
            color: #fff;
            border-radius: 20px;
        }

        /* Tambahkan gaya untuk kotak menu */
        .menu-box {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        span{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Kasir Sederhana</h1>

    <!-- Tambahkan kotak menu -->
    <div class="menu-box">
        <center><h2>Menu Makanan</h2></center>
        <div class="menu-table">
            <table>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>Nasi Goreng</td>
                    <td>Rp 25,000</td>
                </tr>
                <tr>
                    <td>Ayam Goreng</td>
                    <td>Rp 30,000</td>
                </tr>
                <tr>
                    <td>Mie Goreng</td> <!-- Tambahkan Mie Goreng -->
                    <td>Rp 20,000</td> <!-- Tambahkan Harga Mie Goreng -->
                </tr>
            </table>
        </div>
    </div>

    <div class="menu-box">
        <center><h2>Menu Minuman</h2></center>
        <div class="menu-table">
            <table>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>Es Teh</td>
                    <td>Rp 5,000</td>
                </tr>
                <tr>
                    <td>Jus Jeruk</td>
                    <td>Rp 7,000</td>
                </tr>
                <tr>
                    <td>Es Cappuccino</td> <!-- Tambahkan Es Cappuccino -->
                    <td>Rp 8,000</td> <!-- Tambahkan Harga Es Cappuccino -->
                </tr>
            </table>
        </div>
    </div>

    <center><h2>Pesan</h2></center>
    <form action="" method="post">
        <h3>Pilih Menu Makanan</h3>
        <div class="input-box">
            <label for="makanan1">Makanan<span>*</span></label>
            <select id="makanan1" name="menu_makanan1">
                <option value="">Pilih Menu</option>
                <option value="Nasi Goreng">Nasi Goreng</option>
                <option value="Ayam Goreng">Ayam Goreng</option>
                <option value="Mie Goreng">Mie Goreng</option> <!-- Tambahkan Mie Goreng -->
            </select>
            <br>
            <label for="jumlah_makanan1">Jumlah Pesanan<span>*</span></label>
            <input type="number" id="jumlah_makanan1" name="jumlah_pesan_makanan1" min="0">
        </div><br>

        <h3>Pilih Menu Minuman</h3>
        <div class="input-box">
            <label for="minuman1">Minuman<span>*</span></label>
            <select id="minuman1" name="menu_minuman1">
                <option value="">Pilih Menu</option>
                <option value="Es Teh">Es Teh</option>
                <option value="Jus Jeruk">Jus Jeruk</option>
                <option value="Es Cappuccino">Es Cappuccino</option> <!-- Tambahkan Es Cappuccino -->
            </select><br>
            <label for="jumlah_minuman1">Jumlah Pesanan<span>*</span></label>
            <input type="number" id="jumlah_minuman1" name="jumlah_pesan_minuman1" min="0">
        </div>

        <input type="submit" value="Pesan">
    </form>


    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $daftarMenu = [];

        $menu_makanan = $_POST["menu_makanan1"];
        $jumlah_pesan_makanan = $_POST["jumlah_pesan_makanan1"];
        $menu_minuman = $_POST["menu_minuman1"];
        $jumlah_pesan_minuman = $_POST["jumlah_pesan_minuman1"];

        if ($jumlah_pesan_makanan > 0) {
            $hargaMakanan = ($menu_makanan == "Nasi Goreng") ? 25000 : (($menu_makanan == "Ayam Goreng") ? 30000 : 20000); // Harga Mie Goreng
            $daftarMenu["makanan"][$menu_makanan] = [
                "nama" => $menu_makanan,
                "jenis" => "Makanan",
                "harga" => $hargaMakanan,
                "jumlah_pesan" => $jumlah_pesan_makanan
            ];
        }

        if ($jumlah_pesan_minuman > 0) {
            $hargaMinuman = ($menu_minuman == "Es Teh") ? 5000 : (($menu_minuman == "Jus Jeruk") ? 7000 : 8000); // Harga Es Cappuccino
            $daftarMenu["minuman"][$menu_minuman] = [
                "nama" => $menu_minuman,
                "jenis" => "Minuman",
                "harga" => $hargaMinuman,
                "jumlah_pesan" => $jumlah_pesan_minuman
            ];
        }

        $totalHarga = 0;
        $hasilOutput = '';

        foreach ($daftarMenu as $kategori => $menu_item) {
            foreach ($menu_item as $nama_menu => $menu) {
                $jumlah = $menu["jumlah_pesan"];
                if ($jumlah > 0) {
                    $totalHargaMenu = $menu["harga"] * $jumlah;
                    $diskon = 0;

                    if ($jumlah > 4) {
                        $diskon = 0.1 * $totalHargaMenu;
                        $totalHargaMenu -= $diskon;
                    }

                    $totalHarga += $totalHargaMenu;

                    $hasilOutput .= "<h3>Rincian Pesanan $nama_menu</h3>";
                    $hasilOutput .= "<p>$nama_menu (" . $menu["jenis"] . "):</p>";
                    $hasilOutput .= "<p>Jumlah: $jumlah</p>";
                    $hasilOutput .= "<p>Total Harga: Rp $totalHargaMenu</p>";

                    if ($diskon > 0) {
                        $hasilOutput .= "<p>Mendapatkan diskon 10%: -Rp $diskon</p>";
                    }
                }
            }
        }

        if ($totalHarga > 0) {
            $hasilOutput .= "<h3>Total Harga</h3>";
            $hasilOutput .= "<p>Rp $totalHarga</p>";
        }
    }
    ?>

    <div class="hasil">
        <?php
        if (isset($hasilOutput)) {
            echo $hasilOutput;
        }
        ?>
    </div>
</body>
</html>