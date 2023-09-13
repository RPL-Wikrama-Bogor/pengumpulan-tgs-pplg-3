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
        'menu' => 'Es Teh',
        'harga' => 5000,
        'tipe' => 'minuman',
    ],
    [
        'menu' => 'Es Jeruk',
        'harga' => 6000,
        'tipe' => 'minuman',
    ],
    [
        'menu' => 'Seblak',
        'harga' => 10000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Batagor',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu Makanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h2 class="mt-4">Daftar Menu Makanan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menus as $key => $m) : ?>
                    <tr>
                        <td><?= $m['menu'] ?></td>
                        <td>Rp <?= number_format($m['harga'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-4">
            <form action="" method="post" id="purchase-form">
                <label for="makanan_menu"><b>Pilih Makanan:</b></label><br>
                <select class="form-control" id="makanan_menu" name="makanan_menu">
                    <option hidden disabled selected></option>
                    <?php foreach ($menus as $item): ?>
                        <?php if ($item['tipe'] == 'makanan'): ?>
                            <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select><br>
                        
                <label for="makanan_quantity"><b>Jumlah Pembelian Makanan:</b></label><br>
                <input class="form-control" type="number" id="makanan_quantity" name="makanan_quantity" required><br>
                        
                <label for="minuman_menu"><b>Pilih Minuman:</b></label><br>
                <select class="form-control" id="minuman_menu" name="minuman_menu">
                    <option hidden disabled selected></option>
                    <?php foreach ($menus as $item): ?>
                        <?php if ($item['tipe'] == 'minuman'): ?>
                            <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select><br>
                        
                <label for="minuman_quantity"><b>Jumlah Pembelian Minuman:</b></label><br>
                <input class="form-control" type="number" id="minuman_quantity" name="minuman_quantity" required><br>

                <button class="btn btn-success" type="submit" value="Beli">Beli</button>
            </form>
        </div>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $makanan_menu = $_POST["makanan_menu"];
    $makanan_quantity = (int)$_POST["makanan_quantity"];

    $minuman_menu = $_POST["minuman_menu"];
    $minuman_quantity = (int)$_POST["minuman_quantity"];

    $total_items = $makanan_quantity + $minuman_quantity; 

    $total_cost_makanan = 0;
    $total_cost_minuman = 0;

    foreach ($menus as $item) {
        if ($item['menu'] == $makanan_menu) {
            $makanan_price = $item['harga'];
            $total_cost_makanan += $makanan_price * $makanan_quantity;
        }

        if ($item['menu'] == $minuman_menu) {
            $minuman_price = $item['harga'];
            $total_cost_minuman += $minuman_price * $minuman_quantity;
        }
    }


    $total_cost = $total_cost_makanan + $total_cost_minuman;


    if ($total_items >= 5) {
        $discount = 0.10 * $total_cost; 
        $total_cost -= $discount;
    }
?>

<div class="mt-4">
    <h2>Bukti Pembelian</h2>
    <?php if ($makanan_quantity > 0): ?>
        <p>Makanan : <?= $makanan_menu ?> (<?= $makanan_quantity ?>)<br> Harga Makanan : Rp <?= number_format($makanan_price * $makanan_quantity, 0, ',', '.'); ?></p>
    <?php endif; ?>

    <?php if ($minuman_quantity > 0): ?>
        <p>Minuman : <?= $minuman_menu ?> (<?= $minuman_quantity ?>)<br> Harga Minuman : Rp <?= number_format($minuman_price * $minuman_quantity, 0, ',', '.'); ?></p>
    <?php endif; ?>

    <?php if ($total_items >= 5): ?>
        <p>Diskon 10%: -Rp <?= number_format($discount, 0, ',', '.'); ?></p>
    <?php endif; ?>

    <p>Total Sebelum Diskon: Rp <?= number_format($total_cost_makanan + $total_cost_minuman, 0, ',', '.'); ?></p>

    <p>Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p>
</div>

<?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
