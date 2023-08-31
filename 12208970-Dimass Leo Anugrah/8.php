<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 8</title>
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
            <label for="angka">Masukkan angka:</label>
            <input type="number" id="angka" name="angka">
            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>
        <?php
        $angka;
        $satuan;
        $puluhan;
        $ratusan;

        if (isset($_POST['submit'])) {
            $angka = $_POST['angka'];

            $satuan = floor($angka % 10);
            $puluhan = floor($angka / 10) % 10;
            $ratusan = floor(($angka % 1000) / 100);

            echo '<p class="result">Angka satuan: ' . $satuan . '<br>';
            echo 'Angka puluhan: ' . $puluhan . '<br>';
            echo 'Angka ratusan: ' . $ratusan . '</p>';
        }
        ?>
    </div>
</body>
</html>
