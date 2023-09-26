<?php
$food_menus = [
    [
        'menu' => 'Nasi Goreng',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Mie Goreng',
        'harga' => 10000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Kwetiaw',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
];

$drink_menus = [
    [
        'menu' => 'Es Jeruk',
        'harga' => 5000,
        'tipe' => 'minuman',

    ],
    [
        'menu' => 'Teh Manis',
        'harga' => 5000,
        'tipe' => 'minuman',

    ],
    [
        'menu' => 'Minuman Boba',
        'harga' => 10000,
        'tipe' => 'minuman',

    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food_menu = $_POST["food_menu"];
    $food_quantity = (int)$_POST["food_quantity"];
    $drink_menu = $_POST["drink_menu"];
    $drink_quantity = (int)$_POST["drink_quantity"];

    // Menghitung total sebelum diskon
    $total_cost = 0;

    foreach ($food_menus as $item) {
        if ($item['menu'] == $food_menu) {
            $food_price = $item['harga'];
            $total_cost += $food_price * $food_quantity;
        }
    }

    foreach ($drink_menus as $item) {
        if ($item['menu'] == $drink_menu) {
            $drink_price = $item['harga'];
            $total_cost += $drink_price * $drink_quantity;
        }
    }

    // Menghitung diskon
    $diskon = $total_cost * 0.10; // 10% dari total

    // Menghitung total setelah diskon
    $total_setelah_diskon = $total_cost - $diskon;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Makan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #C8B6A6;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #A9907E;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 1200px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
      
        td {
            border: 1px solid #ccc;
        }
      
        td {
            padding: 10px;
            text-align: left;
        }

        select,
        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="submit"] {
            background-color: #8D7B68;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 50%;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
        }

        p {
            margin-bottom: 20px;
        }


        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .menu-item {
            width: calc(33.33% - 10px);
            margin: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }



        .struk-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #A4907C;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table>
            <h1>Warung Makan</h1>
            <tr>
                <td><strong>Daftar Menu Makanan</strong></td>
                <td><strong>Harga</strong></td>
            </tr>
            <?php foreach ($food_menus as $food) : ?>
                <tr>
                    <td><?= $food['menu'] ?></td>
                    <td>Rp <?= number_format($food['harga'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td><strong>Daftar Menu Minuman</strong></td>
                <td><strong>Harga</strong></td>
            </tr>
            <?php foreach ($drink_menus as $drink) : ?>
                <tr>
                    <td><?= $drink['menu'] ?></td>
                    <td>Rp <?= number_format($drink['harga'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <!-- Pilihan menu -->
        <label for="food_menu">Pilih Makanan:</label>
        <select id="food_menu" name="food_menu">
            <option hidden disabled selected>-- Pilih makanan --</option>
            <?php foreach ($food_menus as $food) : ?>
                <option value="<?= $food['menu']; ?>"><?= $food['menu']; ?> - Rp <?= number_format($food['harga'], 0, ',', '.'); ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="food_quantity">Jumlah Pembelian Makanan:</label>
        <input type="number" id="food_quantity" name="food_quantity" required><br>

        <label for="drink_menu">Pilih Minuman:</label>
        <select id="drink_menu" name="drink_menu">
            <option hidden disabled selected>-- Pilih minuman --</option>
            <?php foreach ($drink_menus as $drink) : ?>
                <option value="<?= $drink['menu']; ?>"><?= $drink['menu']; ?> - Rp <?= number_format($drink['harga'], 0, ',', '.'); ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="drink_quantity">Jumlah Pembelian Minuman:</label>
        <input type="number" id="drink_quantity" name="drink_quantity"><br>

        <center><input type="submit" value="Beli"></center>
    </form>

  <!-- Menampilkan struk -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="struk-container">
       <center><h2>Bukti Pembelian</h2></center> 
        <table>
            <tr>
                <th>Item</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td><?= $food_menu ?></td>
                <td><?= $food_quantity ?></td>
                <td>Rp <?= number_format($food_price, 0, ',', '.'); ?></td>
                <td>Rp <?= number_format($food_price * $food_quantity, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td><?= $drink_menu ?></td>
                <td><?= $drink_quantity ?></td>
                <td>Rp <?= number_format($drink_price, 0, ',', '.'); ?></td>
                <td>Rp <?= number_format($drink_price * $drink_quantity, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td colspan="3"><strong>Total Pembayaran (Sebelum Diskon)</strong></td>
                <td><b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></td>
            </tr>
            <tr>
                <td colspan="3"><strong>Diskon (10%)</strong></td>
                <td><b>Rp <?= number_format($diskon, 0, ',', '.'); ?></b></td>
            </tr>
            <tr>
                <td colspan="3"><strong>Total Pembayaran (Setelah Diskon)</strong></td>
                <td><b>Rp <?= number_format($total_setelah_diskon, 0, ',', '.'); ?></b></td>
            </tr>
        </table>
    </div>
<?php endif; ?>

</body>

</html>
