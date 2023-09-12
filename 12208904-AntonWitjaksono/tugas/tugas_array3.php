    <?php
    ini_set('display_errors','Off');
    ini_set('error_reporting', E_ALL );
    define('WP_DEBUG', false);
    define('WP_DEBUG_DISPLAY', false);

    $Nama_Makanan = 0;
    $Harga_Makanan = 0;
    $Total_Harga_Makanan = 0;
    $Nama_Minuman = 0;
    $Harga_Minuman = 0;
    $Total_Harga_Minuman = 0;
    $Total_Harga = 0;
    $Jumlah_Minuman = 0;
    $Total_Diskom_Makanan = 0;
    $Total_Diskon_Minuman = 0;

    $List_makanan = [
        [
            "makanan" => "Nasi Goreng",
            "harga" => 15000
        ],
        [
            "makanan" => "Mie goreng",
            "harga" => 10000
        ],
        [
            "makanan" => "Kwetiau",
            "harga" => 15000
        ],
    ];

    $listMinuman = [
        [
            "minuman" => "Es Jeruk",
            "harga" => 5000
        ],
        [
            "minuman" => "Teh Manis",
            "harga" => 5000
        ],
        [
            "minuman" => "Jus Buah",
            "harga" => 7000
        ]
    ];

    if (isset($_POST['submit'])) {
        // Makanan
        $makanan                = $_POST['makanan'];
        $jml_makanan            = (int)$_POST['jml_makanan'] ?? 0;
        $Nama_Makanan           = @$List_makanan[$makanan]["makanan"];
        $Harga_Makanan          = @$List_makanan[$makanan]["harga"] * $jml_makanan;

        // Minuman
        $minuman                = $_POST['minuman'];
        $Jumlah_Minuman            = (int)$_POST['Jumlah_Minuman'];
        $Nama_Minuman           = $listMinuman[$minuman]["minuman"];
        $Harga_Minuman          = $listMinuman[$minuman]["harga"] * $Jumlah_Minuman;

        // Diskon Makanan
        $diskon_makanan         = diskon($jml_makanan);
        $Total_Diskom_Makanan   = $diskon_makanan * $Harga_Makanan;

        // Diskon Minuman
        $diskon_minuman         = diskon($Jumlah_Minuman);
        $Total_Diskon_Minuman   = $diskon_minuman * $Harga_Minuman;

        // Total
        $Total_Harga_Makanan    = $Harga_Makanan - $Total_Diskom_Makanan;
        $Total_Harga_Minuman    = $Harga_Minuman - $Total_Diskon_Minuman;
        $Total_Harga            = $Total_Harga_Makanan + $Total_Harga_Minuman;
    }

    function diskon($jumlah)
    {
        switch ($jumlah) {
            case $jumlah >= 5:
                return 0.1;
            case $jumlah >= 3:
                return 0.05;
            default:
                return 0;

        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tugas_array3.css">
        <title>KASIR</title>
    </head>
    <body>
        <div class="container">
            <div class="menu">
                <h2 class="menu__header">Daftar Menu</h2>
                <ol class="menu__list">
                    <li>Menu : Nasi goreng <br>Harga : Rp. 15.000</li>
                    <li>Menu : Mie goreng <br> Harga : Rp. 10.000</li>
                    <li>Menu : Kwetiau <br> Harga : Rp. 15.000 </li>
                    <li>Menu : Es Jeruk <br> Harga : Rp. 5.000</li>
                    <li>Menu : Teh Manis <br> Harga : Rp. 5.000</li>
                    <li>Menu : Jus Buah <br> Harga : Rp. 7.000</li>
                </ol>
            </div>
            <form method="POST" class="form">
                <table>
                    <tr>
                        <td>Pilih Makanan</td>
                        <td>:</td>
                        <td>
                            <select name="makanan" id="">
                                <option hidden>---Pilih---</option>
                                <?php
                                foreach ($List_makanan as $key => $pilihmakan) {
                                ?>
                                    <option value="<?= $key ?>"><?= $pilihmakan['makanan'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Jumlah Pembelian Makanan</td>
                        <td>:</td>
                        <td><input type="number" name="jml_makanan"></td>
                    </tr>

                    <tr>
                        <td>Pilih Minuman</td>
                        <td>:</td>
                        <td>
                            <select name="minuman" id="">
                                <option hidden>---Pilih---</option>
                                <?php
                                foreach ($listMinuman as $key => $pilihminum) {
                                ?>
                                    <option value="<?= $key ?>"><?= $pilihminum['minuman'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Jumlah Pembelian Minuman</td>
                        <td>:</td>
                        <td><input type="number" name="Jumlah_Minuman"></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="submit" class="form__button" value="Beli"></td>
                    </tr>
                </table>
            </form>

            <div class="pembayaran">
                <h2 class="pembayaran__header">Bukti Pembelian</h2>
                <table>
                    <tr>
                        <td>Makanan</td>
                        <td>:</td>
                        <td><?php echo "Rp. $Nama_Makanan ($jml_makanan)" ?></td>
                    </tr>
                    <tr>
                        <td>Harga Makanan</td>
                        <td>:</td>
                        <td><?php echo "Rp. ". number_format($Harga_Makanan, 0, ',', '.' ) . "  ( Dis : " . number_format($Total_Diskom_Makanan, 0, ',', '.' ) . ")" ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Harga Makanan</td>
                        <td>:</td>
                        <td><?php echo "Rp. ". number_format($Total_Harga_Makanan, 0, ',', '.' ) ?></td>
                    </tr>
                    <tr>
                        <td>Minuman</td>
                        <td>:</td>
                        <td><?php echo "Rp. $Nama_Minuman ($Jumlah_Minuman)" ?></td>
                    </tr>
                    <tr>
                        <td>Harga Minuman</td>
                        <td>:</td>
                        <td><?php echo "Rp. " . number_format($Harga_Minuman, 0, ',', '.' ) . "  ( Dis : " . number_format($Total_Diskon_Minuman, 0, ',', '.' ) . ")" ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Harga Minuman</td>
                        <td>:</td>
                        <td><?php echo "Rp. " . number_format($Total_Harga_Minuman, 0, ',', '.')?></td>
                    </tr>
                    <tr>
                        <td>Total Pembayaran</td>
                        <td>:</td>
                        <td><b><?php echo "Rp. ". number_format($Total_Harga, 0, ',', '.')?></b></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>

    </html>