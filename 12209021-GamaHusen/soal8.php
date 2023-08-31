<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Bilangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            color: black;
            text-align: center;
            padding: 10px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1>Konversi Bilangan</h1>
    </header>
    <div class="container">
        <form action="" method="post">
            <label for="bilangan">Inputkan bilangan: </label>
            <input type="text" name="bilangan" id="bilangan" required>
            <button type="submit" name="submit">Konversi</button>
        </form>

        <?php
        $bilangan;
        $satuan;
        $puluhan;
        $ratusan;

        if (isset($_POST["submit"])) {
            $bilangan = $_POST["bilangan"];
            $satuan = $bilangan % 10;
            $puluhan = ($bilangan / 10) % 10;
            $ratusan = intval($bilangan / 100);

            echo '<div class="result">';
            echo "Jadi jika dikonversikan akan menjadi $ratusan Ratusan, $puluhan Puluhan, $satuan Satuan";
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>