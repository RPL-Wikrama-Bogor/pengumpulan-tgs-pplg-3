<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
</head>
<body>
   <div class="card">
    <div class="text">
   <center> <h2 style="font-size: 35px;">Pemesanan Tiket</h2></center>
    <form action="" method="post">
        <label for="usia">Masukan usia anda: </label><br>
        <input type="number" name="usia" id="usia"><br>
        <label for="judul">Pilih judul yang ingin anda tonton: </label><br>
        <select name="judul" id="judul">
            <option value="Miracle in Cell No.7">Miracle in Cell No.7</option>
            <option value="Galaksi">Galaksi</option>
            <option value="Kenapa hari ini, Neira?">Kenapa hari ini, Neira?</option>
            <option value="Melody Dilan">Melody Dilan</option>
            <option value="W2Dunia">W2Dunia</option>
        </select><br><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    </div>
   </div>

    <?php
    if(isset($_POST['submit'])){
        $usia_pemesan = $_POST['usia']; 
        $judul_terpilih = $_POST['judul']; 

        $pemesanan = [
            [
                "judul" => "Miracle in Cell No.7",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Galaksi",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Kenapa hari ini, Neira?",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Melody Dilan",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "W2Dunia",
                "min_usia" => 15,
                "harga" => 45000
            ]
        ];

        $film_terpilih = null;
        foreach ($pemesanan as $film) {
            if ($film["judul"] == $judul_terpilih) {
                $film_terpilih = $film;
                break;
            }
        }

        ?>
        <div class="hasil">
            <?php if ($film_terpilih) {
                if ($usia_pemesan >= $film_terpilih["min_usia"]) {
                    echo "Berhasil memesan tiket selamat menonton film " . $film_terpilih["judul"] . ". Harga tiket: Rp " . number_format($film_terpilih["harga"]);
                } else {
                    echo "Maaf, anda tidak dapat menonton film " . $film_terpilih["judul"] . " karena usia anda kurang dari " . $film_terpilih["min_usia"] . " tahun.";
                }
            } else {
                echo "Judul film tidak valid.";
            } ?>
        </div>
 <?php   }
    ?>
</body>
</html>