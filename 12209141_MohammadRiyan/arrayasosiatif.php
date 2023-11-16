<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pemesanan Tiket</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Masukkan Judul Film: <input type="text" name="judul" required><br><br> 
            Masukkan Usia Anda: <input type="number" name="usia" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
    <?php

    $pesan = [
        "judul" => "Miracle in cell no.7",
        "min-usia" => 15,
        "harga" => 45000
    ];        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usia = $_POST["usia"];
            $judul = $_POST["judul"];
            if (is_numeric($usia)) {
                $usia_minimum = 15;
                if ($usia >= $usia_minimum) {
                    echo "<p>Usia Anda adalah $usia tahun. Anda memenuhi persyaratan untuk menonton film \"$judul\".</p>";
                } else {
                    echo "<p>Maaf, Anda tidak memenuhi persyaratan usia minimum ($usia_minimum tahun) untuk menonton film \"$judul\".</p>";
                }
            } else {
                echo "<p>Masukkan usia dalam bentuk angka yang valid.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
