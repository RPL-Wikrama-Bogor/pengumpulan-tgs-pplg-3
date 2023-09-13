<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>JajanKu - Kantin Online</title>
</head>
<body>
<?php 
$menus = [
    [
        'menu' => 'Baso Aci',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Cilok',
        'harga' => 10000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Risol',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Somay',
        'harga' => 10000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Stick Cheese',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
]
?>

<div class="tampilan-awal">
    <img src="bgbt.jpeg" alt="">
    <div class="teks">
        <p>Hayu Urang Jajan Didieu<br>
        <button>
            <a href="#menu" style="text-decoration: none; color: inherit;">Menu</a>
        </button></p>
    </div>
    <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#69913e" fill-opacity="1" d="M0,192L40,208C80,224,160,256,240,245.3C320,235,400,181,480,176C560,171,640,213,720,234.7C800,256,880,256,960,229.3C1040,203,1120,149,1200,138.7C1280,128,1360,160,1400,176L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
    <div class="menu" id="menu"></div>
</div>

<div class="tampilan-isi" name="menu">
    <h1>Menu Jajanan</h1><br>
    <div class="card-grid">
        <?php foreach ($menus as $menu) : ?>
            <div class="card">
                <img src="<?= strtolower($menu['menu']) ?>.jpeg" alt="Gambar <?= $menu['menu'] ?>">
                <h2><?= $menu['menu'] ?></h2>
                <p>Rp <?= number_format($menu['harga'], 0, ',', '.') ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#69913e" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,85.3C672,75,768,117,864,117.3C960,117,1056,75,1152,69.3C1248,64,1344,96,1392,112L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>

<div class="h1">
    <h1>Silahkan Pesan</h1>
    <div class="pemesanan-makanan">
        <div class="form-pemesanan">
            <h2>Buat Pesanan</h2>
            <div class="pesan">
                <form action="" method="post" id="purchase-form">
                    <label for="makanan_menu"><b>Pilih Jajanan :</b></label><br>
                    <select style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 100vh;" id="makanan_menu" name="makanan_menu" >
                        <option hidden disabled selected></option>
                        <?php foreach ($menus as $item): ?>
                            <?php if ($item['tipe'] == 'makanan'): ?>
                                <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select><br><br>

                    <label for="makanan_quantity"><b>Jumlah Pembelian Jajanan :</b></label><br>
                    <option hidden disabled selected>pilih minuman ya</option>
                    <input style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 100vh;" type="number" id="makanan_quantity" name="makanan_quantity" ><br><br>

                    <button style="background-color: #76b64b; color: #0b0d0d; border-radius: 5px; border: none; width: 150px;" type="submit" value="Beli"><b>Beli</b></button>
                </form>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $makanan_menu = $_POST["makanan_menu"];
            $makanan_quantity = (int)$_POST["makanan_quantity"];
        
            $total_cost = 0;
    
            foreach ($menus as $item) {
                if ($item['menu'] == $makanan_menu) {
                    $makanan_price = $item['harga'];
                    $total_cost += $makanan_price * $makanan_quantity;
                }
            }
    
            if ($makanan_quantity >= 5) {
                $discount = 0.10 * $total_cost;
                $total_cost -= $discount;
            }
        ?>

        <div class="pembayaran">
            <h2>Pembayaran</h2>
            <p>Makanan : <?= $makanan_menu ?> (<?= $makanan_quantity ?>)<br> Harga Makanan : <b>Rp <?= number_format($makanan_price * $makanan_quantity, 0, ',', '.'); ?></b>
                <br>
                <?php if ($makanan_quantity >= 5): ?>
                    Diskon 10%: <b>Rp <?= number_format($discount, 0, ',', '.'); ?></b><br>
                <?php endif; ?>
                    Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p>
                    <p style="font-size: 14px;">terima kasih telah jajan di tempat kami</p>
                    <p style="font-size: 16px; float: right;"><b>-JajanKu</b></p>
        </div>

        <?php } ?>
    </div>
</div>

<div class="footer">
    &copy; 2023 JajanKu. by sagyra
</div>
</body>
</html>