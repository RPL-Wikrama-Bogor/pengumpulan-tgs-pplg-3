<?php
$film = [
    [
        "judul" => "The Nun",
        "min-usia" => "15",
        "harga" => 35000,
    ],
    [
        "judul" => "Spiderman No Way Home",
        "min-usia" => "15",
        "harga" => 35000,
    ],
    [
        "judul" => "Jakarta vs Everybody",
        "min-usia" => "17",
        "harga" => 20000,
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
    <link rel="stylesheet" href="tiket.css">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="menu">
        <h2>Daftar Film</h2>
        <?php
        foreach ($film as $data) { ?>
            <div class="film-list">
                <span class="film-title"><?= $data["judul"]; ?></span>
                <div class="film-details">
                    Minimum Usia: <?= $data["min-usia"]; ?> tahun<br>
                    Harga: Rp<?= $data["harga"]; ?>,00
                </div>
            </div>
        <?php } ?>
    </div>
        <form action="" method="post">
            <h2>Kasir Sederhana</h2>
            <label for="usia">Usia</label>
            <input type="number" name="usia" required>
            <br>
            <label for="judul">Judul</label>
            <select name="judul" id="judul" required>
                <?php
                foreach ($film as $data) {
                    echo "<option value='{$data['judul']}'>{$data['judul']}</option>";
                }
                ?>
            </select>
            <br>
            <label for="total">Jumlah tiket yang dibeli</label>
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
    $umur = $_POST["usia"];
    $judul = $_POST["judul"];
    $tiket = $_POST["total"];

    foreach ($film as $data) {
        if ($judul == $data["judul"]) {
            if ($umur >= $data["min-usia"]) {
                if ($tiket >= 5) {
                    // Menghitung harga dengan diskon 10%
                    $harga_diskon = $data['harga'] * $tiket * (1 - $diskon);
                    echo "<div class='hasil'>Anda Berhasil Membeli tiket dengan harga diskon 10%: Rp" . $harga_diskon . ",00</div>";
                } else {
                    $total_harga = $data['harga'] * $tiket;
                    echo "<div class='hasil'>Anda Berhasil Membeli tiket dengan harga Rp" . $total_harga . ",00</div>";
                }
            } else {
                echo "<div class='hasil'>Maaf, anda tidak bisa menonton film karena umur anda kurang dari " . $data['min-usia'] . " tahun</div>";
            }
            break;
        }
    }
}
?>
