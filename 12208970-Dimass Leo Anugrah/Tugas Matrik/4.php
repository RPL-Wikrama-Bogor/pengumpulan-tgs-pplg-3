<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
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

        input[type="text"],
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
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="nama">Masukkan Nama anda:</label>
            <input type="text" name="nama" id="nama">

            <label for="gaji_pokok">Masukkan Gaji Pokok anda:</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok">

            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>
        <?php
        $nama = "";
        $tunj;
        $pjk;
        $gaji_bersih;
        $gaji_pokok;

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $gaji_pokok = $_POST['gaji_pokok'];

            $tunj = (20 * $gaji_pokok) / 100;
            $pjk = (15 * ($gaji_pokok + $tunj)) / 100;
            $gaji_bersih = $gaji_pokok + $tunj - $pjk;

            echo '<p class="result">Nama: ' . $nama . '<br>';
            echo 'Tunjangan: Rp ' . $tunj . '<br>';
            echo 'Pajak: Rp ' . $pjk . '<br>';
            echo 'Gaji Bersih: Rp ' . $gaji_bersih . '</p>';
        }
        ?>
    </div>
</body>
</html>
