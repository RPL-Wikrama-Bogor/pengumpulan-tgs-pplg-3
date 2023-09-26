<?php
$pilihan = [
    [
        "makan" => "Bakso",        
        "harga" => 10000,
    ],
    [
        "makan" => "Mie Ayam",        
        "harga" => 12000,
    ],
    [
        "makan" => "Mie Ayam Bakso",
        "harga" => 18000,
    ],
];

// Inisialisasi jumlah tiket yang dipesan
$jumlah_tiket_dipesan = 0;

// Harga diskon 10%
$diskon = 0.10; // 10% diskon

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tiket&makanan.css">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="menu">
        <h2>Pilihan Menu Makanan</h2>
        <p><h2>Mas Tukul</h2></p>
        <?php
        foreach ($pilihan as $data) { ?>
            <div class="film-list">
                <span class="film-title"><?= $data["makan"]; ?></span>
                <div class="film-details">
                    Harga: Rp<?= $data["harga"]; ?>,00
                </div>
            </div>
        <?php } ?>
    </div>
        <form action="" method="post">
            <h2>Kasir Sederhana Bakso</h2>
            <br>
            <label for="menu">Menu Makanan</label>
            <select name="menu" id="menu" required>
                <?php
                foreach ($pilihan as $data) {
                    echo "<option value='{$data["makan"]}'>{$data["makan"]}</option>";
                }
                ?>
            </select>
            <br>
            <label for="total">Jumlah Menu yang di beli</label>
            <p>beli 5 diskon 10%</p>
            <input type="number" name="total" required>
            <br>
            <button type="submit" name="kirim">Submit</button>
            <br>
            ------------------------------------------------------
        </form>
    </center>
</body>
</html>


<?php
if (isset($_POST["kirim"])) {
    $menu = $_POST["menu"];
    $total = $_POST["total"];

    foreach ($pilihan as $data) {
        if ($menu == $data["makan"]) {
            if ($total >= 5) {
                // Menghitung harga dengan diskon 10%
                $harga_diskon = $data['harga'] * $total * (1 - $diskon);
                echo "<div class='hasil'>Anda Berhasil Membeli $menu dengan harga diskon 10%: Rp" . number_format($harga_diskon, 2, ',', '.') . "</div>";
            } else {
                $total_harga = $data['harga'] * $total;
                echo "<div class='hasil'>Anda Berhasil Membeli $menu dengan harga Rp" . number_format($total_harga, 2, ',', '.') . "</div>";
            }
        }
    }
}
?>
