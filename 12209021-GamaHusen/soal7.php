<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Harga Garam</title>
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
        <h1>Hitung Harga Garam</h1>
    </header>
    <div class="container">
        <form action="" method="post">
            <label for="garam">Total Jeruk (g): </label>
            <input type="text" name="garam" id="garam" required>
            <button type="submit" name="submit">Hitung</button>
        </form>

        <?php
        $total_garam;
        $harga_sebelum;
        $total;
        $diskon;
        $harga_setelah;
        if (isset($_POST["submit"])) {
            $total_garam = $_POST["garam"];
            $total = $total_garam/100;
            $harga_sebelum = 500 * $total;
            $diskon = 5 * $harga_sebelum / 100;
            $harga_setelah = $harga_sebelum - $diskon;

            echo '<div class="result">';
            echo "Harga sebelum diskon: Rp $harga_sebelum. Diskon: Rp $diskon. Harga setelah diskon: Rp $harga_setelah";
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>