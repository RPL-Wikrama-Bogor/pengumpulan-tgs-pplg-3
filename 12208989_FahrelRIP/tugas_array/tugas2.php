<?php
$makanan = [
    "1" => "Fried Chicken",
    "2" => "Fried Fries",
    "3" => "Burger",
    "4" => "Apple Pie",
    "5" => "Spicy Chicken Nugget",
    "6" => "happy Meal"
];
$minuman = [
    "1" => "WcFloat",
    "2" => "Iced Coffe",
    "3" => "Orange Jus",
    "4" => "Wc Flurry",
    "5" => "Ice Lemon Tea",
    "6" => "Soda"
];
$makanan;
$minuman;

if (isset($_POST["submit"])) {
    $makanan = $_POST["makan"];
    $minuman = $_POST["minum"];
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
        <script>
        alert('The food you order: $makanan The drink you order: $minuman Total price: RP. $harga_total (diskon 10% karena 5 kali pembelian)')
        document.location.href= 'tugas2.php';
        </script>
        ";
    }

    echo "
        <script>
        alert('The food you order: $makanan, The drink you order: $minuman, Total price: RP. $total')
        document.location.href= 'tugas2.php';
        </script>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order at WwcD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #D71313;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5%;
            box-shadow: 0 0 25px black;
        }

        h1 {
            font-size: 20px;
            color: #D71313;
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
            transition: 0.5s; 
            padding: 15px 20px;
            background-color: #FFB000;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background-color: #d50000;
        }

        .wcd-logo {
            text-align: center;
            margin-bottom: 20px;
            transition: 0.5s;
        }

        .wcd-logo h1 strong {
            color: #FFB000;
            font-size: 40px;
        }

        .wcd-logo img {
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wcd-logo">
            <img src="images.png" alt="WcD Logo">
            <h1><strong>Welcome to <span style="color: #D71313;">WwcD</span></strong></h1>
        </div>
        <h1><strong> Order Your Meal</strong></h1>
        <form action="" method="post">
            <label for="">Information: </label>
            <ul>
                <li>Meals : RP 25.000,00</li>
                <li>Drinks : RP 10.000,00</li>
            </ul>
            <ul>
                <li>
                    <label for="makan">Choose Your Meal:</label>
                    <select name="makan" id="makan">
                        <option value="">...</option>
                        <option value="<?php echo $makanan["1"] ?>">Fried Chicken</option>
                        <option value="<?php echo $makanan["2"] ?>">Fried Fries</option>
                        <option value="<?php echo $makanan["3"] ?>">Burger</option>
                        <option value="<?php echo $makanan["4"] ?>">Apple Pie</option>
                        <option value="<?php echo $makanan["5"] ?>">Spicy Chicken Nugget</option>
                        <option value="<?php echo $makanan["6"] ?>">Happy Meal</option>
                    </select>
                </li>
                <li>
                    <label for="minum">Choose Your Drink:</label>
                    <select name="minum" id="minum">
                        <option value="">...</option>
                        <option value="<?php echo $minuman["1"] ?>">WcFloat</option>
                        <option value="<?php echo $minuman["2"] ?>">Iced Coffe</option>
                        <option value="<?php echo $minuman["3"] ?>">Orange Jus</option>
                        <option value="<?php echo $minuman["4"] ?>">Wc Flurry</option>
                        <option value="<?php echo $minuman["5"] ?>">Ice Lemon Tea</option>
                        <option value="<?php echo $minuman["6"] ?>">Soda</option>
                    </select>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="makanan">How many packs of Meals:</label>
                    <input type="text" name="makanan" required>
                </li>
                <li>
                    <label for="minuman">How many packs of Drinks:</label>
                    <input type="text" name="minuman" required>
                </li>
            </ul> 
            <button type="submit" name="submit">ORDER</button>
        </form>
        <?php
        if (isset($daftar_tiket)) {
        ?>
            <p>Your Order: <?= $daftar_tiket["nama"] ?>, Total Price: RP.<?= $daftar_tiket["Harga"] ?></p>
        <?php
        }
        ?>
    </div>
</body>

</html>