<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="menu-card">
        <h2>Mie Goreng</h2>
        <p>Harga: Rp. 15.000</p>
    </div>

    <div class="menu-card">
        <h2>Mie Gacoan</h2>
        <p>Harga: Rp. 15.000</p>
    </div>

    <div class="menu-card">
        <h2>Mie Ayam</h2>
        <p>Harga: Rp. 15.000</p>
    </div>

    <div class="menu-card">
        <h2>Bakso</h2>
        <p>Harga: Rp. 15.000</p>
    </div>

    <div class="menu-card">
        <h2>Sate Maranggi</h2>
        <p>Harga: Rp. 15.000</p>
    </div>
    <div class="menu-card">
        <h2>Ice Tea</h2>
        <p>Harga: Rp. 5.000</p>
    </div>

    <div class="menu-card">
        <h2>Kopi Susu</h2>
        <p>Harga: Rp. 5.000</p>
    </div>

    <div class="menu-card">
        <h2>Susu Jahe</h2>
        <p>Harga: Rp. 5.000</p>
    </div>

    <div class="menu-card">
        <h2>Matcha Latte</h2>
        <p>Harga: Rp. 5.000</p>
    </div>

    <div class="menu-card">
        <h2>Ice Coffe</h2>
        <p>Harga: Rp. 70.000</p>
    </div>

    <div class="card">
        <h2>STRUK PEMBELIAN</h2>
        <form action="" method="post">
            <div class="circle">
                <label for="makanan">Pilih Menu Makanan</label>
                <select name="makanan" id="makanan" class="menu">
                    <option value="">...</option>
                    <option value="<?php echo $makanan["1"] ?>">Mie goreng</option>
                    <option value="<?php echo $makanan["2"] ?>">Mie Gacoan</option>
                    <option value="<?php echo $makanan["3"] ?>">Mie Ayam</option>
                    <option value="<?php echo $makanan["4"] ?>">Bakso</option>
                    <option value="<?php echo $makanan["5"] ?>">Sate Maranggi</option>
                </select>
                <label for="minuman" style="margin-bottom: 20px;">Pilih Menu Minuman</label>
                <select name="minuman" id="minuman" class="menu">
                    <option value="">...</option>
                    <option value="<?php echo $makanan["1"] ?>">Ice Tea</option>
                    <option value="<?php echo $makanan["2"] ?>">Kopi Susu</option>
                    <option value="<?php echo $makanan["3"] ?>">Susu Jahe</option>
                    <option value="<?php echo $makanan["4"] ?>">Matcha Latte</option>
                    <option value="<?php echo $makanan["5"] ?>">Ice Coffe</option>
                </select>

                <label for="makanan">Berapa jumlah makanan : </label>
                <input type="text" name="makanan">

                <label for="minuman">Berapa jumlah minuman : </label>
                <input type="text" name="minuman">
                <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>

<?php

$makanan = [
    "1" => "Mie Goreng",
    "2" => "Mie Gacoan",
    "3" => "Mie Ayam",
    "4" => "Bakso",
    "5" => "Sate Maranggi",
];
$minuman = [
    "1" => "Ice Tea",
    "2" => "Kopi Susu",
    "3" => "Susu Jahe",
    "4" => "Matcha Latte",
    "5" => "Ice Coffe",
];

$makanan;
$minuman;

if (isset($_POST["submit"])) {
    $makanan = $_POST["makanan"];
    $minuman = $_POST["minuman"];
    $total_makanan = $_POST["makanan"] * 15000;
    $_total_minuman = $_POST["minuman"] * 5000;
    $total = $total_makanan + $_total_minuman;
    $hasil = $_POST["makanan"] + $_POST["minuman"];

    if ($hasil >= 5) {
        $diskon = ($total * 10) / 100;
        $harga_total = $total - $diskon;
    }
    if (isset($harga_total)) {
        echo "
        Makanan yang anda pesan: $makanan makanan, Minuman yang anda pesan: $minuman minuman, Harga Total: RP.$harga_total (diskon 10% karena 5 kali pembelian)
        ";
    } else

        echo "
        Makanan yang anda pesan: $makanan makanan, Minuman yang anda pesan: $minuman minuman, Harga Total: RP.$total
        ";
}

?>