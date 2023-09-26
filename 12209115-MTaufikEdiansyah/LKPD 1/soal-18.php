<!DOCTYPE html>
<html>
<head>
    <title>Pemisahan Angka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        form {
            margin: 20px auto;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        p {
            font-size: 18px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Pemisahan Angka</h1>
    <form method="post" action="">
        Masukkan bilangan bulat: <input type="number" name="bilangan"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $bilangan = $_POST['bilangan'];

        // Memisahkan angka menjadi satuan, puluhan, dan ratusan
        $satuan = $bilangan % 10;
        $puluhan = ($bilangan % 100 - $satuan) / 10;
        $ratusan = ($bilangan % 1000 - $puluhan * 10 - $satuan) / 100;

        echo "<p>Bilangan $bilangan memiliki:</p>";
        echo "<p>Satuan: $satuan</p>";
        echo "<p>Puluhan: $puluhan</p>";
        echo "<p>Ratusan: $ratusan</p>";
    }
    ?>
</body>
</html>