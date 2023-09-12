

<?php
$berat;
$harga_asli;
$harga_diskon;
$harga_total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Harga Buah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        input[type="number"] {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perhitungan Harga Buah</h2>
        <form action="" method="post">
            <label for="berat">Masukkan berat dalam gram:</label>
            <input type="number" id="berat" name="berat">
            <button type="submit" name="submit">Kirim</button>
        </form>
        <div class="result">
        <?php

            if (isset($_POST['submit'])) {
                $berat = $_POST['berat'];

                $harga_asli = (5 * $berat);
                $harga_diskon = 5 * $harga_asli / 100;
                $harga_total = $harga_asli - $harga_diskon;

                echo " harga asli : Rp " . $harga_asli;
                echo " diskon: Rp" . $harga_diskon ;
                echo " harga total : Rp " . $harga_total;
            }

        ?>
        </div>
    </div>
</body>
</html>
