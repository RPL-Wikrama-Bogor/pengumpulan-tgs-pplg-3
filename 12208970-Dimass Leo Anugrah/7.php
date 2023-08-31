<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 7</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
            margin-right: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        p.result {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div>
                <label for="berat">Berat gram:</label>
                <input type="number" id="berat" name="berat">    
            </div>
            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>
        <?php
        $berat;
        $harga_asli;
        $harga_diskon;
        $harga_total;

        if (isset($_POST['submit'])) {
            $berat = $_POST['berat'];

            $harga_asli = (5 * $berat);
            $harga_diskon = 5 * $harga_asli / 100;
            $harga_total = $harga_asli - $harga_diskon;

            echo '<p class="result">Harga asli: Rp ' . $harga_asli . '<br>';
            echo 'Diskon: Rp ' . $harga_diskon . '<br>';
            echo 'Harga total: Rp ' . $harga_total . '</p>';
        }
        ?>
    </div>
</body>
</html>
