<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>
</head>

<body>
    <?php
    $menuMakanan = [
        [
            "makanan" => "Mie ramen",
            "harga" => 23000
        ],
        [
            "makanan" => "Sushi",
            "harga" => 150000
        ],
        [
            "makanan" => "Mie udon",
            "harga" => 35000
        ],
    ];

    $menuMinuman = [
        [
            "minuman" => "Es teh manis",
            "harga" => 5000
        ],
        [
            "minuman" => "Oreo milkshake",
            "harga" => 25000
        ]
    ];
    ?>
    <div class="card">
        <h1>Daftar menu</h1>
        <ol>
            <li>Menu : Mie ramen <br>Harga : Rp. 23.000</li>
            <li>Menu : Sushi <br> Harga : Rp. 150.000</li>
            <li>Menu : Mie udon <br> Harga : Rp. 35.000 </li>
            <li>Menu : Es teh manis <br> Harga : Rp. 5.000</li>
            <li>Menu : Oreo milkshake <br> Harga : Rp. 25.000</li>
        </ol>


        <form action="" method="post">
            <table>
                <tr>
                    <td>Pilih Makanan</td>
                    <td>:</td>
                    <td><select name="pilihmakanan" id="">
                            <option hidden>---Pilih---</option>
                            <?php
                            foreach ($menuMakanan as $key => $pilihmakan) {
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
                            foreach ($menuMinuman as $key => $pilihminum) {
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
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $jumlahmakanan = isset($_POST['jumlahmakan']) ? $_POST['jumlahmakan'] : 0;
        $makan = isset($_POST['makanan']) ? $_POST['makanan'] : 0;
        $jumlahminuman = isset($_POST['jumlahminum']) ? $_POST['jumlahminum'] : 0;
        $minum = isset($_POST['minuman']) ? $_POST['minuman'] : 0;

        $hargaMakanan = $menuMakanan[$makan]['harga'];
        $hargaMinuman = $menuMinuman[$minum]['harga'];

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
        echo "Makanan: {$menuMakanan[$makan]['makanan']} ({$jumlahmakanan})<br> Harga Makanan: Rp. {$hargaMakanan}<br> Jumlah Harga Makanan: Rp. {$totalHargaMakanan} (disc $diskonMakanan) <br>";
        echo "Minuman: {$menuMinuman[$minum]['minuman']} ({$jumlahminuman})<br> Harga Minuman: Rp. {$hargaMinuman}<br> Jumlah Harga Minuman: Rp. {$totalHargaMinuman} (disc $diskonMinuman) <br>";
        echo "Total Pembayaran: Rp. {$totalPembayaran}";
    }
    ?>

    </form>
</body>

</html>