<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Makanan</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            text-align: center;
            text-decoration: none;
            margin: 20px;
            background-color: #E4E4D0;
        }

        .menu-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 200px;
            margin: auto;
            margin-bottom: 20px;
            padding: 10px;
        }

        .menu-card img {
            width: 100%;
            border-radius: 10px;
        }

        .menu-card h3 {
            margin-top: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        li {
            margin: 10px;
            text-align: left;
        }

        form {
            background-color: #fff;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
        }

        label, input, select {
            margin-bottom: 10px;
            display: block;
        }  
        
    </style>
</head>
<body>
    <h1>Daftar Menu</h1>
    <ul>
        <?php
        // Daftar harga makanan beserta gambar
        $menuMakanan = array(
            "Nasi-Goreng" => array("harga" => 20000, "gambar" => "nasi.jpg"),
            "Mie-Goreng" => array("harga" => 15000, "gambar" => "mie.jpg"),
            "Ayam-Bakar" => array("harga" => 10000, "gambar" => "ayam.jpg"),
            "Batagor" => array("harga" => 5000, "gambar" => "batagor.jpg"),
        );

        // Menampilkan daftar menu
        foreach($menuMakanan as $menu => $detail) {
            $harga = $detail["harga"];
            $gambar = $detail["gambar"];
            echo "<li><div class='menu-card'><img src='{$gambar}' alt='{$menu}'><h3>{$menu}</h3><p>Rp {$harga}</p></div></li>";
        }
        ?>
    </ul>
    <h1>Pemesanan</h1>
    <form action="#" method="post">
        <label for="pilihMakanan">Pilih Makanan</label>
        <select name="pilihMakanan" id="pilihMakanan">
            <?php   
            foreach($menuMakanan as $menu => $detail) {
                $harga = $detail["harga"];
                echo "<option value='{$menu}'>{$menu} - Rp {$harga}</option>";
            }
            ?>
        </select>
        <label for="jumlahPesan">Jumlah Pemesanan</label>
        <input type="number" name="jumlahPesan" id="jumlahPesan" required>
        
        <input type="submit" name="submit" value="Kirim">
        </div>
        <?php
    if(isset($_POST['submit'])) {
        $menu = $_POST['pilihMakanan'];
        $jumlah = $_POST['jumlahPesan'];
        $harga = $menuMakanan[$menu]["harga"] * $jumlah;

        // Menampilkan informasi pemesanan
        echo "<h2>Informasi Pemesanan:</h2>";
        echo "Makanan: " . $menu.  "<br>";
        echo "Jumlah Pesanan: " . $jumlah . "<br>";
        echo "Harga Total: Rp " . $harga . "<br>";

        if ($jumlah >= 5) {
            $diskon = $harga * 0.1;
            $hargaSetelahDiskon = $harga - $diskon;
            echo "Diskon 10%: - Rp " . $diskon . "<br>";
            echo "Harga Setelah Diskon: Rp " . $hargaSetelahDiskon . "<br>";
        }
    }
    ?>
    </form>

</body>
</html>
