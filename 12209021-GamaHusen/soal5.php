<?php
$jam;
$menit;
$detik;
$total;

if (isset($_POST["submit"])) {
    $jam = $_POST["jam"] * 3600;
    $menit = $_POST["menit"] * 60;
    $detik = $_POST["detik"];
    $total = $jam + $menit + $detik;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi dari Jam Menit Detik ke Total Detik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: black;
            padding: 20px;
            margin: 0;
        }

        .container {
            margin: 20px auto;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: left;
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
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Konversi dari Jam Menit Detik ke Total Detik</h1>
    <div class="container">
        <form action="" method="post">
            <label for="jam">Jam: </label>
            <input type="text" name="jam" id="jam" required>

            <label for="menit">Menit:</label>
            <input type="text" name="menit" id="menit" required>

            <label for="detik">Detik: </label>
            <input type="text" name="detik" id="detik" required>

            <button type="submit" name="submit">Konversi</button>
        </form>

        <?php if (isset($_POST["submit"])) : ?>
            <div class="result">
                Total Detik: <?= $total ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>