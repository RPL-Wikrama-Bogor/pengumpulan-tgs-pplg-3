<?php 
$menus = [
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
        'menu' => 'Nasi Kuning',
        'harga' => 12000,
        'tipe' => 'makanan',
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makan</title>
    <style>
        /* (Tinggalkan gaya CSS Anda di sini) */
    </style>
</head>
<body>
    <form action="" method="post" id="purchase-form">
        <h1>Warung Bu Ahmad</h1>
        <table>
            <tr>
                <td><strong>Daftar Menu</strong></td>
                <td><strong>Harga</strong></td>
            </tr>
            <?php foreach ($menus as $key => $m) : ?>
                <tr>
                    <td>Menu: <?= $m['menu'] ?></td>
                    <td>Harga: <?= $m['harga'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <br>

        <label for="food_menu">Pilih Makanan:</label>
        <select id="food_menu" name="food_menu">
            <option hidden disabled selected>--pilih makanan--</option>
            <?php foreach ($menus as $item): ?>
                <?php if ($item['tipe'] == 'makanan'): ?>
                    <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select><br>
                
        <label for="food_quantity" required>Jumlah Pembelian Makanan:</label>
        <input type="number" id="food_quantity" name="food_quantity" required><br>

        <label for="drink_menu">Pilih Minuman:</label>
        <select id="drink_menu" name="drink_menu">
            <option hidden disabled selected>--pilih minuman--</option>
            <?php foreach ($menus as $item): ?>
                <?php if ($item['tipe'] == 'minuman'): ?>
                    <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select><br>
                
        <label for="drink_quantity">Jumlah Pembelian Minuman:</label>
        <input type="number" id="drink_quantity" name="drink_quantity"><br>
                
        <input type="submit" value="Beli">
    </form>
            
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $food_menu = $_POST["food_menu"];
        $food_quantity = (int)$_POST["food_quantity"];
        $drink_menu = $_POST["drink_menu"];
        $drink_quantity = (int)$_POST["drink_quantity"];
        
        $total_cost = 0;
        $diskon = 0;
        
        foreach ($menus as $item) {
            if ($item['menu'] == $food_menu) {
                $food_price = $item['harga'];
                $total_cost += $food_price * $food_quantity;
            } elseif ($item['menu'] == $drink_menu) {
                $drink_price = $item['harga'];
                $total_cost += $drink_price * $drink_quantity;
            }
        }
        
        if ($food_quantity >= 5) {
            $diskon += 0.10;
        }
        
        if ($drink_quantity >= 5) {
            $diskon += 0.10;
        }
        
        $total_cost -= $total_cost * $diskon;
    ?>
        <h2>Bukti Pembelian</h2>
        <p> Makanan : <?= $food_menu ?> (<?= $food_quantity ?>)<br> Harga Makanan : <?= number_format($food_price * $food_quantity, 0, ',', '.'); ?>
        <br>Minuman : <?= $drink_menu ?> (<?= $drink_quantity ?>)<br> Harga Minuman :<?= number_format($drink_price * $drink_quantity, 0, ',', '.'); ?>
        <br>Total Pembayaran (setelah diskon): <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p>
    <?php } ?>
</body>
</html>
