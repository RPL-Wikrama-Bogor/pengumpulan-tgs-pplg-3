<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $listMakanan = [
            ["makanan" => "Nasi Goreng",
                "harga" => 15000],
            ["makanan" => "Mie goreng",
                "harga" => 10000],
            ["makanan" => "Kwetiau",
                "harga" => 15000],
            ];

            $listMinuman = [
            ["minuman" => "Es Jeruk",
                "harga" => 5000],
            ["minuman" => "Teh Manis",
                "harga" => 5000]
            ];
        ?>
        <h1>Daftar menu</h1>
        <ol>
            <li>Menu : Nasi goreng <br>Harga : Rp. 15.000</li>
            <li>Menu : Mie goreng <br> Harga : Rp. 10.000</li>
            <li>Menu : Kwetiau <br> Harga : Rp. 15.000 </li>
            <li>Menu : Es Jeruk <br> Harga : Rp. 5.000</li>
            <li>Menu : Teh Manis <br> Harga : Rp. 5.000</li>
        </ol>

    <form action="" method="post">
        <table>
            <tr>
                <td>Pilih Makanan</td>
                <td>:</td>
                <td><select name="pilihmakanan" id="">
                <option hidden>---Pilih---</option>
                <?php
                foreach ($listMakanan as $key => $pilihmakan) {
                ?>
                    <option value="<?= $key ?>"><?= $pilihmakan['makanan'] ?></option>
                <?php
                }
                ?>
                </select></td>
            </tr>

            <tr>
                <td>Jumlah Pembelian Makanan</td>
                <td>:</td>
                <td><input type="number" name="jumlahmakan"></td>
            </tr>

            <tr>
                <td>Pilih Minuman</td>
                <td>:</td>
                <td><select name="pilihminuman" id="">
                <option hidden>---Pilih---</option>
                <?php
                foreach ($listMinuman as $key => $pilihminum) {
                ?>
                    <option value="<?= $key ?>"><?= $pilihminum['minuman'] ?></option>
                <?php
                }
                ?>
                </select></td>
            </tr>

            <tr>
                <td>Jumlah Pembelian Minuman</td>
                <td>:</td>
                <td><input type="number" name="jumlahminum"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Beli"></td>
            </tr>
        </table>
        <!-- <?php
            // if(isset($_POST['submit'])){
            //     $jumlahmakanan = $_POST['jumlahmakan'];
            //     $makan = $_POST['pilihmakanan'];
            //     $jumlahminuman = $_POST['jumlahminum'];
            //     $minum = $_POST['pilihminuman'];
        
            //     echo "<h1>Bukti Pembayaran<br></h1>";
                
            // }
        ?> -->

        <?php
        if(isset($_POST['submit'])){
            $jumlahmakanan = isset($_POST['jumlahmakan']) ? $_POST['jumlahmakan'] : 0;
            $makan = isset($_POST['makanan']) ? $_POST['makanan'] : 0;
            $jumlahminuman = isset($_POST['jumlahminum']) ? $_POST['jumlahminum'] : 0;
            $minum = isset($_POST['minuman']) ? $_POST['minuman'] : 0;
        
            $hargaMakanan = $listMakanan[$makan]['harga'];
            $hargaMinuman = $listMinuman[$minum]['harga'];
        
            $totalHargaMakanan = $jumlahmakanan * $hargaMakanan;
            $totalHargaMinuman = $jumlahminuman * $hargaMinuman;
        
            $diskonMakanan = 0;
            $diskonMinuman = 0;
        
            if ($jumlahmakanan >= 5) {
                $diskonMakanan = $totalHargaMakanan * 0.10;
            }
            if ($jumlahmakanan >= 5) {
                $diskonMakanan = $totalHargaMakanan * 0.10;
            }
            if ($jumlahminuman >= 3) {
                $diskonMinuman = $totalHargaMinuman * 0.05;
            }
            if ($jumlahminuman >= 5) {
                $diskonMinuman = $totalHargaMinuman * 0.10;
            }
        
            $totalPembayaran = $totalHargaMakanan - $diskonMakanan + $totalHargaMinuman - $diskonMinuman;
        
            echo "<h1>Bukti Pembelian</h1>";
            echo "Makanan: {$listMakanan[$makan]['makanan']} ({$jumlahmakanan}),<br> Harga Makanan: Rp. {$hargaMakanan},<br> Jumlah Harga Makanan: Rp. {$totalHargaMakanan} (disc $diskonMakanan) <br>";
            echo "Minuman: {$listMinuman[$minum]['minuman']} ({$jumlahminuman}),<br> Harga Minuman: Rp. {$hargaMinuman},<br> Jumlah Harga Minuman: Rp. {$totalHargaMinuman} (disc $diskonMinuman) <br>";
            echo "Total Pembayaran: Rp. {$totalPembayaran}";
        }
        ?>
        
    </form>
</body>
</html>