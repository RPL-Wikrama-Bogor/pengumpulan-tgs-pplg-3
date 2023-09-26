<?php 
    $menus = [
        [
            'menu' => 'Emih Gacoan',
            'harga' => 15000,
            'tipe' => 'makanan',
        ],
        [
            'menu' => 'Ayam Goyeng',
            'harga' => 10000,
            'tipe' => 'makanan',
        ],
        [
            'menu' => 'Martabak',
            'harga' => 15000,
            'tipe' => 'makanan',
        ],
        [
            'menu' => 'Emih goyeng',
            'harga' => 10000,
            'tipe' => 'makanan',
        ],
        [
            'menu' => 'Ayam goyeng sambel ijo',
            'harga' => 15000,
            'tipe' => 'makanan',
        ],
    ]
?>
<center>
    <div class="menu">
        <form action="" method="post">
                <table>
                    <tr>
                        <td><h2>Daftar Menu Makanan</h2></td><br>
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
    </div>

    <div class="pembelian">
    <form action="" method="post" id="purchase-form">
        <!-- <h2>Makanan</h2> -->
        <label for="makanan_menu"><b>Pilih Makanan:</b></label><br>
        <select style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 90vh;" id="makanan_menu" name="makanan_menu" >
        <option hidden disabled selected></option>
            <?php foreach ($menus as $item): ?>
                <?php if ($item['tipe'] == 'makanan'): ?>
                    <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select><br><br>

        <label for="makanan_quantity"><b>Jumlah Pembelian Makanan:</b></label><br>
        <option hidden disabled selected>pilih minuman ya</option>
        <input style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 90vh;" type="number" id="makanan_quantity" name="makanan_quantity" ><br><br>

        <button style="background-color: #76b64b; color: #fff; border-radius: 5px; border: none; width: 150px;" type="submit" value="Beli">Beli</button>
    </form>
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

            // Apply a 10% discount if the quantity is more than 5
            if ($makanan_quantity >= 5) {
                $discount = 0.10 * $total_cost; // 10% discount
                $total_cost -= $discount;
            }
    ?>

    <div class="hasil">
        <h2>Bukti Pembelian</h2>
        <p>Makanan : <?= $makanan_menu ?> (<?= $makanan_quantity ?>)<br> Harga Makanan : <?= number_format($makanan_price * $makanan_quantity, 0, ',', '.'); ?>
            <br>
            <?php if ($makanan_quantity >= 5): ?>
                Diskon 10%: -Rp <?= number_format($discount, 0, ',', '.'); ?><br>
            <?php endif; ?>
                Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p>
    </div>
</center>
    <?php } ?>
