<?php
$makanan = [
    "1" => "Mie Goreng",
    "2" => "Seblak",
    "3" => "Padang",
    "4" => "Bakso",
    "5" => "Mie ayam",
    "6" => "Sate Ayam"
];
$minuman = [
    "1" => "Es jeruk",
    "2" => "Es teh",
    "3" => "Es cokelat",
    "4" => "Es Milo",
    "5" => "Es kelapa",
    "6" => "Jasjus"
];
$makanan;
$minuman;

if (isset($_POST["submit"])) {
    $makanan = $_POST["mangan"];
    $minuman = $_POST["minum"];
    $total_makanan = $_POST["makanan"] * 15000;
    $_total_minuman = $_POST["minuman"] * 8000;
    $total = $total_makanan + $_total_minuman;
    $tot = number_format($total, 2);
    $hasil = $_POST["makanan"] + $_POST["minuman"];

    if ($hasil >= 5) {
        $diskon = ($total * 10) / 100;
        $harga_total = $total - $diskon;
        $tot = number_format($harga_total, 2);
    }
    if (isset($harga_total)) {
        echo "
        <script>
        alert('Makanan yang anda pilih: $makanan, Minuman yang anda pilih: $minuman, Harga Total:  RP $tot (diskon 10% karena 5 kali pembelian)')
        document.location.href= 'arrayasosiatif2.php';
        </script>
        ";
    }

    echo "<p></p>";

    echo "
        <script>
        alert('Makanan yang anda pilih: $makanan, Minuman yang anda pilih: $minuman, Harga Total: RP $tot')
        document.location.href= 'arrayasosiatif2.php';
        </script>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride a Food</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(img/bg.jpg);
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
            color: #f80000;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        select,
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            background-color: #fff;
        }

        button[type="submit"] {
            padding: 15px 20px;
            background-color: #ECEE81;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-left: 460px;
        }

        button[type="submit"]:hover {
            background-color: #EFD595;
        }

        p {
            font-weight: bold;
            margin-top: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 165px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://thumbs.dreamstime.com/b/food-spoon-fork-vector-symbol-graphic-logo-design-template-food-spoon-fork-symbol-logo-design-121549456.jpg" alt="KFC Logo">
        </div>
        <h1>Pesan Makanan Anda!</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="mangan">Menu Makanan:</label>
                    <select name="mangan" id="mangan" required>
                        <option value="">...</option>
                        <option value="<?php echo $makanan["1"] ?>">Mie Ayam</option>
                        <option value="<?php echo $makanan["2"] ?>">Mie Bakso</option>
                        <option value="<?php echo $makanan["3"] ?>">Soto Mie</option>
                        <option value="<?php echo $makanan["4"] ?>">Nasi Uduk</option>
                        <option value="<?php echo $makanan["5"] ?>">Ketoprak</option>
                        <option value="<?php echo $makanan["6"] ?>">Takoyaki</option>
                    </select>
                </li>
                <h7>*Harga: RP 15.000,00</h7>
                <li>
                    <label for="minum">Menu Minuman:</label>
                    <select name="minum" id="minum" required>
                        <option value="">...</option>
                        <option value="<?php echo $minuman["1"] ?>">Es jeruk</option>
                        <option value="<?php echo $minuman["2"] ?>">Es teh</option>
                        <option value="<?php echo $minuman["3"] ?>">Kopi Hangat</option>
                        <option value="<?php echo $minuman["4"] ?>">Milkshake</option>
                        <option value="<?php echo $minuman["5"] ?>">Es Kelapa</option>
                        <option value="<?php echo $minuman["6"] ?>">Es Cendol</option>
                    </select>
                </li>
                <h7>*Harga: RP 8.000,00</h7>
            </ul>
            <ul>
                <li>
                    <label for="makanan">Jumlah Pesan Makanan:</label>
                    <input type="text" name="makanan" required>
                </li
                <li>
                    <label for="minuman">Jumlah Pesan Minuman:</label>
                    <input type="text" name="minuman" required>
                </li>
            </ul>
            <button type="submit" name="submit">ORDER</button>
        </form>
        <?php
        if (isset($daftar_tiket)) {
        ?>
            <p>Your Order: <?= $daftar_tiket["Nama"] ?>, Total Price: RP.<?= $daftar_tiket["Harga"] ?></p>
        <?php
        }
        ?>
    </div>
</body>

</html>