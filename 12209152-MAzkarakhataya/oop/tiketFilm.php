<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
</head>
<body>  
    <h1>Pemesanan Tiket</h1>
    <hr>
    <form action="" method="post">
        <label for="usia">Masukan usia anda: </label><br>
        <input type="number" name="usia" id="usia"><br>
        <label for="judul">Pilih film yang ingin anda tonton: </label><br>
        <select name="judul" id="judul">
            <option value="Miracle in Cell">Miracle in Cell</option>
            <option value="Avatar">Avatar</option>
            <option value="Black Panter">Black Panter</option>
            <option value="End game">End game</option>
            <option value="Spiderman">Spiderman</option>
        </select><br><br>
        <button type="submit" name="submit">Pesan Tiket</button>
    </form>

    <?php   
    if(isset($_POST['submit'])){
        $usia_pemesan = $_POST['usia']; 
        $judul_terpilih = $_POST['judul']; 

        $pemesanan = [
            [
                "judul" => "Miracle in Cell",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Avatar",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Black Panter",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "End game",
                "min_usia" => 15,
                "harga" => 45000
            ],
            [
                "judul" => "Spiderman",
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

        if ($film_terpilih) {
            if ($usia_pemesan >= $film_terpilih["min_usia"]) {
                echo "Selamat menonton film " . $film_terpilih["judul"] . ". Harga tiket: Rp " . $film_terpilih["harga"]        ;
            } else {
                echo "Maaf, Anda tidak dapat menonton film " . $film_terpilih["judul"] . " karena usia Anda kurang dari " . $film_terpilih["min_usia"] . " tahun.";
            }
        } else {
            echo "Judul film tidak valid.";
        }
    }
    ?>
</body>
</html>