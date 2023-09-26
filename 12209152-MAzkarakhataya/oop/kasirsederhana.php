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
            ["makanan" => "Dimsum",
                "harga" => 15000],
            ["makanan" => "Mie Ayam",
                "harga" => 10000],
            ["makanan" => "Soto Mie",
                "harga" => 15000],
            ["makanan" => "Babakaran",
                "harga" => 15000],
            ["makanan" => "Sate",
                "harga" => 15000],  
            ];

            $listMinuman = [
            ["minuman" => "Es Jeruk",
                "harga" => 5000],
            ["minuman" => "Teh Manis",
                "harga" => 5000],
            ["minuman" => "Es Kelapa",
                "harga" => 5000]
            ];
        ?>
         <hr>
        <h1>Daftar menu</h1>
        <ol>
            <li>Menu : Dimsum <br>Harga : Rp. 15.000</li>
            <li>Menu : Mie Ayam <br> Harga : Rp. 10.000</li>
            <li>Menu : Soto Mie <br> Harga : Rp. 15.000 </li>
            <li>Menu : Babakaran <br> Harga : Rp. 2.000 </li>
            <li>Menu : Sate <br> Harga : Rp. 15.000 </li>
            <li>Menu : Es Jeruk <br> Harga : Rp. 5.000</li>
            <li>Menu : Teh Manis <br> Harga : Rp. 5.000</li>
            <li>Menu : Es Kelapa <br> Harga : Rp. 10.000 </li>
        </ol>
        <hr>


    <form action="" method="post">
        <table>
            <tr>
                <td>Pilih Makanan</td>
                <td>:</td>
                <td><select name="pilihmakanan" id="">
                <option hidden>-Menu-</option>
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
                <option hidden>-Menu-</option>
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
        <hr>

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
