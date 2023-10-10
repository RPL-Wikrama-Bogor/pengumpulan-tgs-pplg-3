<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-image:url('img/b.png');
            background-size:cover;
            color:#000;
        }

        h1, h2, h3 {
            color: #000;
            text-align: center;
        }

        .menu-item {
            padding: 10px;
            margin-bottom: 10px;
            background-color: #000;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter:blur(7px);
            border-radius:8px;
            color:#000;
        }

        form {
            background-color: #000;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter:blur(7px);
            color:#000;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        select, input[type="number"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.2);
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #000;
            text-align: right;
        }
    </style>
</head>
<body>
<h1>Kasir Sederhana</h1>
    <div class="menu-item">
        <h2>Daftar Menu</h2>
        <ol>
            <li>
                <p>Menu : Nasi Goreng</p>
                <p>Harga: 15.000</p>
            </li>
            <li>
                <p>Menu : Ayam Bakar</p>
                <p>Harga: 30.000</p>
            </li>
            <li>
                <p>Menu : Ikan Bakar</p>
                <p>Harga: 25.000</p>
            </li>
            <li>
                <p>Menu : Air Mineral</p>
                <p>Harga: 3.500</p>
            </li>
            <li>
                <p>Menu : Es Teh</p>
                <p>Harga: 6.000</p>
            </li>
            <li>
                <p>Menu : Teh Tarik</p>
                <p>Harga: 8.000</p>
            </li>
            <li>
                <p>Menu : Jus Mangga</p>
                <p>Harga: 10.000</p>
            </li>
        </ol>
    </div>


    <h2>Pesan</h2>
    <form action="" method="post">
        <div class="input-box">
            <h3>Pilih Menu Makanan</h3>
            <label for="makanan1">Makanan:</label>
            <select id="makanan1" name="menu_pilihan[Nasi Goreng]">
                <option value="">Pilih Menu</option>
                <option value="Nasi Goreng">Nasi Goreng</option>
                <option value="Ayam Bakar">Ayam Bakar</option>
                <option value="Ikan Bakar">Ikan Bakar</option>
            </select>
            <br>
            <label for="jumlah_makanan1">Jumlah Pesanan:</label>
            <input type="number" id="jumlah_makanan1" name="jumlah_pesan[Nasi Goreng]" min="0">
        </div>

        <div class="input-box">
            <h3>Pilih Menu Minuman</h3>
            <label for="minuman1">Minuman:</label>
            <select id="minuman1" name="menu_pilihan[Es Teh]">
                <option value="">Pilih Menu</option>
                <option value="Air Mineral">Air Mineral</option>
                <option value="Es Teh">Es Teh</option>
                <option value="Teh Tarik">Teh Tarik</option>
                <option value="Jus Mangga">Jus Mangga</option>
            </select><br>
            <label for="jumlah_minuman1">Jumlah Pesanan:</label>
            <input type="number" id="jumlah_minuman1" name="jumlah_pesan[Es Teh]" min="0">
        </div>

        <input type="submit" value="Pesan" name="submit">
    </form>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $daftarMenu = [];

    $menu_pilihan = $_POST["menu_pilihan"];
    $jumlah_pesan = $_POST["jumlah_pesan"];

    foreach ($menu_pilihan as $menu => $menu_name) {
        if ($jumlah_pesan[$menu] > 0) {
            $harga = ($menu == "Nasi Goreng") ? 15000 : (($menu == "Ayam Bakar") ? 30000 : (($menu == "Ikan Bakar") ? 25000 : (($menu == "Air Mineral") ? 3500 : (($menu == "Es Teh") ? 6000 : (($menu == "Teh Tarik") ? 8000 : 10000)))));
            $daftarMenu[$menu] = [
                "nama" => $menu,
                "jenis" => ($harga >= 15000 && $harga <= 25000) ? "Makanan" : "Minuman",
                "harga" => $harga,
                "jumlah_pesan" => $jumlah_pesan[$menu]
            ];
        }
    }

    $totalHarga = 0;
    $hasilOutput = '';

    foreach ($daftarMenu as $menu) {
        $jumlah = $menu["jumlah_pesan"];
        if ($jumlah > 0) {
            $totalHargaMenu = $menu["harga"] * $jumlah;
            $diskon = 0;

            if ($jumlah > 4) {
                $diskon = 0.1 * $totalHargaMenu;
                $totalHargaMenu -= $diskon;
            }

            $totalHarga += $totalHargaMenu;

            $hasilOutput .= "<h3>Rincian Pesanan {$menu['nama']}</h3>";
            $hasilOutput .= "<p>{$menu['nama']} ({$menu['jenis']}):</p>";
            $hasilOutput .= "<p>Jumlah: $jumlah</p>";
            $hasilOutput .= "<p>Total Harga: Rp {$totalHargaMenu}</p>";

            if ($diskon > 0) {
                $hasilOutput .= "<p>Mendapatkan diskon 10%: -Rp {$diskon}</p>";
            }
        }
    }

    if ($totalHarga > 0) {
        $hasilOutput .= "<h3>Total Harga</h3>";
        $hasilOutput .= "<p>Rp {$totalHarga}</p>";
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