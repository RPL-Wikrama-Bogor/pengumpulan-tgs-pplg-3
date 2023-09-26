<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pemesanan Tiket</h1>
<form action="" method="post">
        <label for="usia">Masukan usia anda: </label><br>
        <input type="number" name="usia" id="usia"><br>
        <label for="judul">Film yang ingin ditonton: </label><br>
        <select name="judul" id="judul">
            <option value="pilih film">Pilih Film</option>
            <option value="Miracle in Cell No.7">Miracle in Cell No.7</option>
            <option value="Duty After School">Duty After School</option>
            <option value="Transformer">Transformer</option>
            <option value="Elemental">Elemental</option>
            <option value="jumanji">jumanji</option>
        </select><br><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
 
    <?php
    if(isset($_POST['submit'])){
        $usia_pemesan = $_POST['usia'];
        $judul_terpilih = $_POST['judul']; 

        $pemesanans = [
            [
                "judul" => "Miracle in Cell No.7",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Duty After School",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Transformer",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Elemental",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Jumanji",
                "min_usia" => 15,
                "harga" => 45000
            ]
        ];

        $film_pemesanan = null;
        foreach ($pemesanans as $pemesanan) {
            if ($pemesanan["judul"] == $judul_terpilih) {
                $film_pemesanan = $pemesanan;
                break;
            }
        }

        if ($film_pemesanan) {
            // Untuk mengetahui apakah pemesan cukup umur
            if ($usia_pemesan >= $film_pemesanan["min_usia"]) {
                echo "Silahkan menonton film " . $film_pemesanan["judul"] . " dengan harga tiket: Rp." . number_format($film_pemesanan["harga"]);
            } else {
                echo "Maaf, usia anda " . $film_pemesanan["usia"] . " belum cukup umur untuk menonton film " . $film_pemesanan["judul"];
            }
        } else {
            echo "Judul film tidak valid.";
        }
    }
    ?>
</body>
</html>