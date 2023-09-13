<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
</head>
<body>
    <form action="" method="post">
        <label for="usia">Masukan usia anda: </label><br>
        <input type="number" name="usia" id="usia"><br>
        <label for="judul">Pilih judul yang ingin anda tonton: </label><br>
        <select name="judul" id="judul">
            <option value="Miracle in Cell No.7">Miracle in Cell No.7</option>
            <option value="Danur">Danur</option>
            <option value="Galaksi">Galaksi</option>
            <option value="Sewu Dino">Sewu Dino</option>
            <option value="Barbie">Barbie</option>
        </select><br><br>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $usia_pemesan = $_POST['usia']; // Mendapatkan nilai usia dari inputan
        $judul_terpilih = $_POST['judul']; // Mendapatkan judul film yang dipilih

        $pemesanan = [
            [
                "judul" => "Miracle in Cell No.7",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Danur",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Galaksi",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Sewu Dino",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Barbie",
                "min_usia" => 15,
                "harga" => 45000
            ]
        ];

        // Temukan data pemesanan film yang sesuai dengan judul yang dipilih
        $film_terpilih = null;
        foreach ($pemesanan as $film) {
            if ($film["judul"] == $judul_terpilih) {
                $film_terpilih = $film;
                break;
            }
        }

        if ($film_terpilih) {
            if ($usia_pemesan >= $film_terpilih["min_usia"]) {
                // Pemesan memenuhi persyaratan usia, mereka dapat menonton
                echo "Selamat menonton film " . $film_terpilih["judul"] . ". Harga tiket: Rp " . $film_terpilih["harga"];
            } else {
                // Pemesan tidak memenuhi persyaratan usia
                echo "Maaf, Anda tidak dapat menonton film " . $film_terpilih["judul"] . " karena usia Anda kurang dari " . $film_terpilih["min_usia"] . " tahun.";
            }
        } else {
            // Menampilkan pesan jika judul film tidak ditemukan
            echo "Judul film tidak valid.";
        }
    }
    ?>
</body>
</html>