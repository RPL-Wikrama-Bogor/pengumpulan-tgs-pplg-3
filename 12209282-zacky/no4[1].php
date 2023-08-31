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
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="nama">Masukkan Nama Anda:</label>
            <input type="text" name="nama" id="nama" required>
        </div>

        <div>
            <label for="gaji_pokok">Masukkan Gaji Pokok Anda:</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok" required>
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <div class="result">
        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $gaji_pokok = $_POST['gaji_pokok'];

            $tunj = (20 * $gaji_pokok) / 100;
            $pjk = (15 * ($gaji_pokok + $tunj)) / 100;
            $gaji_bersih = $gaji_pokok + $tunj - $pjk;

            echo "<p>Nama: $nama</p>";
            echo "<p>Tunjangan: Rp $tunj</p>";
            echo "<p>Pajak: Rp $pjk</p>";
            echo "<p>Gaji Bersih: Rp $gaji_bersih</p>";
        }
        ?>
    </div>
</body>
</html>
