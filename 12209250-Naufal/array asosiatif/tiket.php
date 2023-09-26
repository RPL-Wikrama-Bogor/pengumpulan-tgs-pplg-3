<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Tiket Film</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Cabin&family=Comfortaa&family=Gluten&family=Nunito:wght@600&family=Sedgwick+Ave+Display&display=swap');
        body {
            font-family: 'Comfortaa', cursive;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-image: url(img/poto.jpeg);
            background-size: cover;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);  
            color: #fff;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;    
        }

        input[type="submit"] {
            background-color: #FF1493;
            font-family: 'Comfortaa', cursive;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 10px;
        }

        input[type="submit"]:hover {
            background-color: #FF69B4;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 10px;
        }

        .success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <h1>Tiket Bioskop</h1>
    
    <form action="" method="post">
        <label for="judul_film">Judul Film:</label>
        <select id="judul_film" name="judul_film" required>
            <option value="">Pilih Film</option>
            <option value="Toys Story 4">Toys Story 4</option>
            <option value="Spongebob Squerpants The Movie">Spongebob Squerpants The Movie</option>
            <option value="Cars 3">Cars 3</option>
            <option value="The Revenant">The Revenant</option>
            <option value="Transformers 4">Transformers 4</option>
            <option value="Catch Me If You Can">Catch Me If You Can</option>
        </select><br><br>

        <label for="nama_pemesan">Nama Pemesan:</label>
        <input type="text" id="nama_pemesan" name="nama_pemesan" required><br><br>
        
        <label for="usia_pemesan">Usia Pemesan:</label>
        <input type="number" id="usia_pemesan" name="usia_pemesan" required><br><br>
        
        <label for="jumlah_tiket">Jumlah Tiket:</label>
        <input type="number" id="jumlah_tiket" name="jumlah_tiket" required><br><br>
        
        <input type="submit" value="Cek Pemesanan">
    </form>
        

    <?php
    $pemesanan_tiket = array(
        "Toys Story 4" => array(
            "min_usia" => 6,
            "harga" => 50000
        ),
        "Spongebob Squerpants The Movie" => array(
            "min_usia" => 6,
            "harga" => 50000
        ),
        "Cars 3" => array(
            "min_usia" => 6,
            "harga" => 45000
        ),
        "The Revenant" => array(
            "min_usia" => 17,
            "harga" => 55000
        ),
        "Transformers 4" => array(
            "min_usia" => 15,
            "harga" => 50000
        ),
        "Catch Me If You Can" => array(
            "min_usia" => 17,
            "harga" => 50000
        )
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pemesan = $_POST["nama_pemesan"];
        $judul_film = $_POST["judul_film"];
        $jumlah_tiket = $_POST["jumlah_tiket"];
        $usia_pemesan = $_POST["usia_pemesan"];

        if (array_key_exists($judul_film, $pemesanan_tiket)) {
            $min_usia = $pemesanan_tiket[$judul_film]["min_usia"];

            if ($usia_pemesan >= $min_usia) {
                $harga_tiket = $pemesanan_tiket[$judul_film]["harga"];
                $harga_total = $jumlah_tiket * $harga_tiket;
                
                echo "<div class='result success'>";
                echo "Terima kasih, $nama_pemesan! Anda bisa menonton film $judul_film. ";
                echo "Harga Tiket $harga_tiket (x $jumlah_tiket) Menjadi : Rp " . number_format($harga_total, 0, ',', '.') . "</div>";
            } else {
                echo "<div class='result error'>";
                echo "Maaf, $nama_pemesan, Anda tidak bisa menonton film $judul_film karena usia Anda tidak memenuhi syarat.</div>";
            }
        } else {
            echo "<div class='result error'>";
            echo "Film $judul_film tidak ditemukan dalam pemesanan tiket.</div>";
        }
    }
    ?>
</body>
</html>