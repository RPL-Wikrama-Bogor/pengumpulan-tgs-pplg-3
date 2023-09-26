<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-body" style="border: 1px solid;">
        <center><h2><b>Daftar Menu</b></h2></center>
    <ol type="1">
        <li>Menu : Nasi Goreng <br> Harga : 15.000</li>
        <li>Menu : Mie Goreng <br> Harga : 10.000</li>
        <li>Menu : Kwetiaw <br> Harga : 15.000</li>
        <li>Menu : Es Jeruk <br> Harga : 5.000</li>
        <li>Menu : Teh Manis <br> Harga : 5.000</li>
    </ol>
    </div>
    </div>
    <form action="" method="post">
        <label for="mkn">Pilih Makanan : </label>
        <select name="pilmak" id="pilmak">
            <!-- pilmak = pilih makanan -->
            <option hidden>*****Pilih*****</option>
            <option value="Nasi goreng">Nasi Goreng</option>
            <option value="Mie goreng">Mie Goreng</option>
            <option value="Kwetiaw">Kwetiaw</option>
            <?php
                foreach ($pesan as $key => $pilmak) {
                ?>
                    <option value="<?= $key ?>"><?= $pilmak['makanan'] ?></option>
                <?php
                }
                ?>
        </select><br>
        <label for="jmlhm">Jumlah Makanan Yang dipesan : </label>
        <input type="number" name="mkn" id="mkn"><br>
        <label for="mkn">Pilih Minuman : </label>
        <select name="pilnum" id="pilnum">
            <!-- pilnum = pilih minuman -->
            <option hidden>*****Pilih*****</option>
            <option value="Es Jeruk">Es Jeruk</option>
            <option value="Teh Manis">Teh Manis</option>
            <?php
                foreach ($pesanm as $key => $pilnum) {
                ?>
                    <option value="<?= $key ?>"><?= $pilnum['minuman'] ?></option>
                <?php
                }
                ?>
        </select><br>
        <label for="jmlhm">Jumlah Minuman Yang dipesan : </label>
        <input type="number" name="mnm" id="mnm"><br>
        <button type="submit" name="submit">Pesan</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $pilmak = $_POST['pilmak'] ? $_POST['pilmak'] : 0;
        $jmkn = $_POST['mkn'] ? $_POST['mkn'] : 0;
        $pilnum = $_POST['pilnum'] ? $_POST['pilnum'] : 0;
        $jmnm = $_POST['mnm'] ? $_POST['mnm'] : 0;
//pilmak = pilih makanan, pilnum = pilih minuman, jmkn = jumlah makanan, jmnm = jumlah minuman
        $pesan = [
        [
            "makanan" => "Nasi goreng",
            "mini" => 5,
            "harga" => 15000
        ],
        [
            "makanan" => "Mie goreng",
            "mini" => 5,
            "harga" => 10000
        ],
        [
            "makanan" => "Kwetiaw",
            "mini" => 5,
            "harga" => 15000
        ]];
        $pesanm = [
        [
            "minuman" => "Es Jeruk",
            "mini" => 5,
            "harga" => 5000
        ],
        [
            "minuman" => "Teh Manis",
            "mini" => 5,
            "harga" => 15000
        ]
        ];
        $hargaMakanan = $pesan[$pilmak]['harga'];
        $hargaMinuman = $pesanm[$pilnum]['harga'];

        $totalHargaMakanan = $jmkn * $hargaMakanan;
        $totalHargaMinuman = $jmnm * $hargaMinuman;

        $diskonMakanan = 0;
        $diskonMinuman = 0;

        if ($jmkn >= 5) {
            $diskonMakanan = $totalHargaMakanan * 0.1;
        }
        if ($jmkn >= 5) {
            $diskonMakanan = $totalHargaMakanan * 0.1;
        }
        if ($jmnm >= 5) {
            $diskonMinuman = $totalHargaMinuman * 0.1;
        }
        if ($jmnm >= 5) {
            $diskonMinuman = $totalHargaMinuman * 0.1;
        }
        
        $totalakhir = $totalHargaMakanan - $diskonMakanan + $totalHargaMinuman - $diskonMinuman;
        
            echo "<h1>Bukti Pembelian</h1>";
            echo "Makanan: {$pesan[$pilmak]['makanan']} ({$jmkn}),<br> Harga Makanan: Rp. {$hargaMakanan},<br> Jumlah Harga Makanan: Rp. {$totalHargaMakanan} (disc $diskonMakanan) <br>";
            echo "Minuman: {$pesanm[$pilnum]['minuman']} ({$jmnm}),<br> Harga Minuman: Rp. {$hargaMinuman},<br> Jumlah Harga Minuman: Rp. {$totalHargaMinuman} (disc $diskonMinuman) <br>";
            echo "Total Pembayaran: Rp. {$totalakhir}";
    };
    ?>
</body>
</html>