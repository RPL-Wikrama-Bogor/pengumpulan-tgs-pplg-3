<?php
// Array pemesanan tiket
$pemesanan = [
    [
        "judul" => "Live Action Tokyo Ghoul",
        "min_usia" => 16,
        "harga" => 45000
    ],
    [
        "judul" => "Avengers: Endgame",
        "min_usia" => 13,
        "harga" => 50000
    ],
    [
        "judul" => "Spider-Man: No Way Home",
        "min_usia" => 14,
        "harga" => 48000
    ]
];

// Fungsi untuk mengecek validitas usia
function cekUsia($judul, $usia) {
    global $pemesanan;

    foreach ($pemesanan as $film) {
        if ($film["judul"] == $judul) {
            if ($usia >= $film["min_usia"]) {
                return "Selamat, Anda dapat menonton film " . $judul . ". Harga tiket: Rp " . number_format($film["harga"], 0, ',', '.') . ".";
            } else {
                return "Usia Anda belum mencukupi untuk menonton film " . $judul . ".";
            }
        }
    }

    return "Film tidak ditemukan.";
}

// Form untuk memilih judul film dan memasukkan usia
if (isset($_POST["submit"])) {
    $judul_terpilih = $_POST["judul_film"];
    $usia_pemesan = intval($_POST["usia"]);
    $jumlah_orang = intval($_POST["jumlah_orang"]);
    $hasil_pemesanan = cekUsia($judul_terpilih, $usia_pemesan);

    // Ambil harga tiket dan hitung total pembayaran
    $harga_tiket = 0;
    foreach ($pemesanan as $film) {
        if ($film["judul"] == $judul_terpilih) {
            $harga_tiket = $film["harga"];
            break;
        }
    }
    $total_pembayaran = $harga_tiket * $jumlah_orang;
} else {
    $judul_terpilih = "";
    $usia_pemesan = "";
    $jumlah_orang = "";
    $hasil_pemesanan = "";
    $harga_tiket = 0;
    $total_pembayaran = 0;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pemesanan Tiket Film</title>
</head>
<style>
    /* CSS untuk form */
form {
    background-color: #f4f4f4;
    padding: 45px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 400px;
    margin: 20px auto;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 15px;
    font-weight: bold;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.struk-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 400px;
    margin: 20px auto;
    text-align: center;
}

.struk-item {
    text-align: left;
}

button[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

/* CSS untuk pesan hasil pemesanan */
p {
    margin-top: 20px;
    font-weight: bold;
    font-size: 18px;
    color: #333;
}

/* CSS untuk judul */
h1 {
    text-align: center;
    font-size: 24px;
    color: #007BFF;
}


marquee {
    text-align: center;
    background-color: #ff6600;
    color: #ffffff;
    padding: 10px 0;
    font-size: 24px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
</style>
<body>
    <h1>Pemesanan Tiket Film</h1>

    <form method="post">
        <label for="judul_film">Pilih Judul Film:</label>
        <select name="judul_film" id="judul_film">
            <option value="Live Action Tokyo Ghoul">Live Action Tokyo Ghoul</option>
            <option value="Avengers: Endgame">Avengers: Endgame</option>
            <option value="Spider-Man: No Way Home">Spider-Man: No Way Home</option>
        </select><br><br>

        <label for="usia">Usia Anda:</label>
        <input type="number" name="usia" id="usia" placeholder="Masukkan usia Anda" value="<?php echo $usia_pemesan; ?>"><br><br>

        <label for="jumlah_orang">Jumlah Orang:</label>
        <input type="number" name="jumlah_orang" id="jumlah_orang" placeholder="Berapa orang akan menonton?" value="<?php echo $jumlah_orang; ?>"><br><br>

        <button type="submit" name="submit">Cek Usia & Harga</button>
    </form>

    <!-- Menampilkan struk -->
    <?php if (isset($_POST["submit"])) : ?>
        <form>
        <div class="struk-container">
            <h2>Struk Pembelian</h2>
            <div class="struk-item">
                <p><strong>Judul Film:</strong> <?php echo $judul_terpilih; ?></p>
                <p><strong>Usia Anda:</strong> <?php echo $usia_pemesan; ?> tahun</p>
                <p><strong>Jumlah Orang:</strong> <?php echo $jumlah_orang; ?> orang</p>
                <p><strong>Harga Tiket:</strong> Rp <?php echo number_format($harga_tiket, 0, ',', '.'); ?></p>
                <p><strong>Total Pembayaran:</strong> Rp <?php echo number_format($total_pembayaran, 0, ',', '.'); ?></p>
            </div>
        </div>
    </form>
    <?php endif; ?>
</body>

</html>
