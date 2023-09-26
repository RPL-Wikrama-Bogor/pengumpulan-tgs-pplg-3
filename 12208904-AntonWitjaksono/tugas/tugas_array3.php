    <?php
    ini_set('display_errors','Off');

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
            "makanan" => "Gurami Goreng Terbang",
            "harga" => 35000
        ],
        [
            "makanan" => "Gurami Bakap Kecap",
            "harga" => 35000
        ],
        [
            "makanan" => "Ayam Bakar",
            "harga" => 17000
        ],
        [
            "makanan" => "Ayam Goreng",
            "harga" => 15000
        ]
    ];

    $listMinuman = [
        [
            "minuman" => "Es Jeruk",
            "harga" => 3000
        ],
        [
            "minuman" => "Es Teh",
            "harga" => 2000
        ],
        [
            "minuman" => "ES Extra Joss",
            "harga" => 2000
        ],
        [
            "minuman" => "Es Joshua",
            "harga" => 3000
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
        <title>KASIR</title>
    </head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
}

.menu {
    width: 30rem;
    padding: 20px;
    border: 1px solid #e5e5e5;
    background-color: #fff;
    margin-bottom: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.menu__header {
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
    color: #d50000;
}

.menu__list {
    list-style-type: none;
    padding: 0;
}

.menu__list li {
    margin-bottom: 15px;
    font-weight: bold;
    color: #333;
}

.menu__list li::before {
    content: "• ";
    color: #d50000;
    margin-right: 10px;
}

.form {
    width: 30rem;
    padding: 20px;
    border: 1px solid #e5e5e5;
    background-color: #fff;
    margin-bottom: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form__button {
    margin-top: 20px;
    padding: 10px 20px;
    display: inline-block;
    background-color: #d50000;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

.form__button:hover {
    background-color: #a00000;
}

.pembayaran {
    width: 30rem;
    padding: 20px;
    border: 1px solid #e5e5e5;
    background-color: #fff;
    margin-bottom: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.pembayaran__header {
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
    color: #d50000;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table td {
    padding: 10px 0;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}
    </style>
    <body>
        <div class="container">
            <div class="menu">
                <h2 class="menu__header">Daftar Menu</h2>
                <ol class="menu__list">
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Makanan</th>
                            <th>Minuman</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Gurami Goreng Terbang <br> Rp. 35.000</td>
                            <td>Es Jeruk <br> Rp. 3.000</td>
                        </tr>
                        <tr>
                            <td>Gurami Bakap Kecap <br> Rp. 35.000</td>
                            <td>Es Teh <br> Rp. 2.000</td>

                        </tr>
                        <tr>
                            <td>Ayam Bakar <br> Rp. 17.000</td>
                            <td>Es Extra Joss <br> Rp. 2.000</td>

                        </tr>
                        <tr>
                            <td>Ayam Bakar <br> Rp. 15.000</td>
                            <td>Es Joshua <br> Rp. 3.000</td>

                        </tr>
                        <tbody>
                    </table>
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