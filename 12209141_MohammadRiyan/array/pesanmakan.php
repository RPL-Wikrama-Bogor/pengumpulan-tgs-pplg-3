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
    $makanan = $_POST["madang"];
    $minuman = $_POST["minum"];
    $total_makanan = $_POST["makanan"] * 15000;
    $_total_minuman = $_POST["minuman"] * 5000;
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
        document.location.href= 'pesanmakan.php';
        </script>
        ";
    }

    echo "<p></p>";

    echo "
        <script>
        alert('Makanan yang anda pilih: $makanan, Minuman yang anda pilih: $minuman, Harga Total: RP $tot')
        document.location.href= 'pesanmakan.php';
        </script>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order at KFC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            background-color: #A73121;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background-color: #952323;
        }

        p {
            font-weight: bold;
            margin-top: 20px;
        }

        .eatlogo {
            text-align: center;
            margin-bottom: 20px;
        }

        .eatlogo img {
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="eatlogo">
            <img src="img/eatlogo.png" alt="Logo">
        </div>
        <h1>Mau Makan Apa?</h1>
        <form action="" method="post">
            <label for="">Harga: </label>
            <ul>
                <li>Makanan: RP 15.000,00</li>
                <li>Minuman: RP 5.000,00</li>
            </ul>
            <ul>
                <li>
                    <label for="madang">Pesan Menu Makanmu:</label>
                    <select name="madang" id="madang">
                        <option value="">...</option>
                        <option value="<?php echo $makanan["1"] ?>">Mie Ayam</option>
                        <option value="<?php echo $makanan["2"] ?>">Doclang</option>
                        <option value="<?php echo $makanan["3"] ?>">Dimsum</option>
                        <option value="<?php echo $makanan["4"] ?>">Soto Ayam</option>
                        <option value="<?php echo $makanan["5"] ?>">Ayam Geprek</option>
                        <option value="<?php echo $makanan["6"] ?>">Sate Ayam</option>
                    </select>
                </li>
                <li>
                    <label for="minum">Pesan Minumanmu:</label>
                    <select name="minum" id="minum">
                        <option value="">...</option>
                        <option value="<?php echo $minuman["1"] ?>">Es jeruk</option>
                        <option value="<?php echo $minuman["2"] ?>">Es Kelapa</option>
                        <option value="<?php echo $minuman["3"] ?>">Teh D/P</option>
                        <option value="<?php echo $minuman["4"] ?>">Kopi D/P</option>
                        <option value="<?php echo $minuman["5"] ?>">Es Cendol</option>
                        <option value="<?php echo $minuman["6"] ?>">Es Doger</option>
                    </select>
                    <p>D = Dingin | P = Panas</p>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="makanan">Berapa banyak pesanan:</label>
                    <input type="text" name="makanan" required>
                </li>
                <li>
                    <label for="minuman">Berapa banyak pesanan:</label>
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