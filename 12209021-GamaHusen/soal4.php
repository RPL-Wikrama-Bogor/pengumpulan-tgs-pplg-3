<?php
$tunj  ;
$pjk ;
$gaji_bersih ;
$gaji_pokok ;
$nama ;

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $gaji_pokok = $_POST["gaji_pokok"];

    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15*($gaji_pokok + $tunj)) / 100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-left: 500px;
            margin-top: 100px;
        }
    </style>
    <title>Kalkulator Gaji</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama Anda: </label>
        <input type="text" name="nama" id="nama" required>

        <label for="gaji_pokok">Gaji pokok: </label>
        <input type="text" name="gaji_pokok" id="gaji_pokok" required>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php if (isset($_POST["submit"])) : ?>
        <div class="result">
            <h2>Hasil Perhitungan</h2>
            <p>Nama anda adalah: <?= $nama ?></p>
            <p>Tunjangan anda adalah: <?= number_format($tunj, 2) ?></p>
            <p>Pajak anda adalah: <?= number_format($pjk, 2) ?></p>
            <p>Gaji bersih anda adalah: <?= number_format($gaji_bersih, 2) ?></p>
        </div>
    <?php endif; ?>
</body>

</html>