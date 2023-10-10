<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Tiket Film</title>
    <style>
        *{
            padding:0;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            background-image: url('img/background.jpeg');
            background-size:cover;
        }
        
        .img {
            display: inline-block;
            width: 50px;
            height: 50px;
        }

        h1 {
            text-align: center;
            color:#fff;
        }

        form {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.2);
            color:#fff;
            backdrop-filter:blur(7px);
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
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #000;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
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
    <br>
    <form action="" method="post">
        <label for="judul_film">Judul Film:</label>
        <select id="judul_film" name="judul_film" required>
            <option value="Boboiboy Movie 1">Boboiboy Movie 1</option>
            <option value="Boboiboy Movie 2">Boboiboy Movie 2</option>
            <option value="Cars 3">Cars 3</option>
            <option value="Barbie">Barbie</option>
            <option value="Dilan 1990">Dilan 1990</option>
            <option value="Dilan 1991">Dilan 1991</option>
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
        "Boboiboy Movie 1" => array(
            "min_usia" => 11,
            "harga" => 50000
        ),
        "Boboiboy Movie 2" => array(
            "min_usia" => 11,
            "harga" => 50000
        ),
        "Cars 3" => array(
            "min_usia" => 7,
            "harga" => 45000
        ),
        "Barbie" => array(
            "min_usia" => 18,
            "harga" => 55000
        ),
        "Dilan 1990" => array(
            "min_usia" => 15,
            "harga" => 50000
        ),
        "Dilan 1991" => array(
            "min_usia" => 15,
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
                echo "Terima kasih, $nama_pemesan! Anda boleh menonton film $judul_film. ";
                echo "Harga Tiket $harga_tiket di (x $jumlah_tiket) Menjadi : Rp " . number_format($harga_total, 0, ',', '.') . "</div>";
            } else {
                echo "<div class='result error'>";
                echo "Maaf, $nama_pemesan, Anda tidak boleh menonton film $judul_film karena usia Anda tidak memenuhi syarat.</div>";
            }
        } else {
            echo "<div class='result error'>";
            echo "Film $judul_film tidak ditemukan dalam pemesanan tiket.</div>";
        }
    }
    ?>
</body>
</html>
