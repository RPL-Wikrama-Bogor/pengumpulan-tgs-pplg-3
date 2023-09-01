<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum Number</title>
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
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
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
            <div class="one">
                <label for="angka_pertama">Masukkan Angka Pertama:</label>
                <input type="number" name="angka_pertama" id="angka_pertama">
            </div>

            <div class="two">
                <label for="angka_kedua">Masukkan Angka kedua:</label>
                <input type="number" name="angka_kedua" id="angka_kedua">
            </div>

            <div class="three">
                <label for="angka_ketiga">Masukkan Angka ketiga:</label>
                <input type="number" name="angka_ketiga" id="angka_ketiga">
            </div>
            
            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>
        <?php
        $bil_satu;
        $bil_dua;
        $bil_tiga;

        if (isset($_POST['submit'])) {
            $bil_satu = $_POST['angka_pertama'];
            $bil_dua = $_POST['angka_kedua'];
            $bil_tiga = $_POST['angka_ketiga'];

            $terbesar = max($bil_satu, $bil_dua, $bil_tiga);

            echo '<p class="result">Bilangan pertama: ' . $bil_satu . '<br>';
            echo 'Bilangan kedua: ' . $bil_dua . '<br>';
            echo 'Bilangan ketiga: ' . $bil_tiga . '<br>';
            echo '<b>Bilangan terbesar: ' . $terbesar . '</b></p>';
        }
        ?>
    </div>
</body>
</html>