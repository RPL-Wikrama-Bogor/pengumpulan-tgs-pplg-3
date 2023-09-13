<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
</head>
<body>
    <form action="" method="post">
        <label for="usia">Usia : </label><br>
        <input type="number" name="usia" id="usia"><br>
        <label for="judul">Pilih judul : </label><br>
        <select name="judul" id="judul">
            <option value="Miracle in Cell No.7">Miracle in Cell No.7</option>
            <option value="Jujutsu kaisen">Jujutsu kaisen</option>
            <option value="Demon slayer">Demon slayer</option>
            <option value="Haikyuu">Haikyuu</option>
            <option value="Star wars">Star wars</option>
        </select><br><br>
        <button type="submit" name="submit">Pesan</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $usia_pemesan = $_POST['usia']; // Mendapatkan nilai usia dari inputan
        $judul_terpilih = $_POST['judul']; // Mendapatkan judul film yang dipilih

        $pemesanan = [
            [
                "judul" => "Miracle in Cell No.7",
                "min_usia" => 15,
                "harga" => 50000
            ],
            [
                "judul" => "Jujutsu kaisen",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Demon slayer",
                "min_usia" => 15,
                "harga" => 30000
            ],
            [
                "judul" => "Haikyuu",
                "min_usia" => 15,
                "harga" => 80000
            ],
            [
                "judul" => "Star wars",
                "min_usia" => 15,
                "harga" => 29000
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
                echo "Silahkan menonton film " . $film_terpilih["judul"] . ". dengan harga tiket: Rp " . $film_terpilih["harga"];
            } else {
                // Pemesan tidak memenuhi persyaratan usia
                echo "Maaf, umur anda belum mencukupi untuk menonton film " . $film_terpilih["judul"] . " karena usia Anda kurang dari " . $film_terpilih["min_usia"] . " tahun.";
            }
        } else {
            // Menampilkan pesan jika judul film tidak ditemukan
            echo "Judul film tidak valid.";
        }
    }
    ?>
</body>
</html>