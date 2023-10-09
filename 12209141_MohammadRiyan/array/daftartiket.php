<?php
$judul;
$usia;
$nama;
$harga = 45000;

if (isset($_POST["submit"])) {
    if ($_POST["judul"] == "kosong") {
        echo "
        <script>
        alert('ISI FORMAT DENGAN SESUAI!!')
        document.location.href= 'daftartiket.php';
        </script>
        ";
    }
    $nama = $_POST["nama"];
    $judul = $_POST["judul"];
    $usia = $_POST["usia"];

    if ($usia < 15) {
        echo "
        <script>
        alert('Umur tidak sesuai!!')
        document.location.href= 'daftartiket.php';
        </script>
        ";
    }


    $daftar_tiket = [
        "Nama" => $nama,
        "Judul" => $judul,
        "Usia" => $usia,
        "Harga" => $harga
    ];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #A73121;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="number"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #952323;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #6C3428;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            background-color: #952323;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Pesan Tiket Bioskop</h2>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>
            <label for="judul">Judul Film:</label>
            <select name="judul" id="judul" required>
                <option value="kosong">Pilih Judul Film</option>
                <option value="Miracle in Cell No. 7">Miracle in Cell No. 7</option>
                <option value="Spiderman: No Way Home">Spiderman: No Way Home</option>
                <option value="Sonic 2">Sonic 2</option>
                <option value="Pengabdi Setan 2">Pengabdi Setan 2</option>
                <option value="Stranger Things">Stranger Things</option>
                <option value=" Super Mario Bros"> Super Mario Bros</option>
            </select>
            <label for="usia">Usia:</label>
            <input type="number" name="usia" required>
            <button type="submit" name="submit">Pesan Tiket</button>
        </form>
        <?php
        if (isset($daftar_tiket)) {
        ?>
            <p>Halo <strong><?= $daftar_tiket["Nama"] ?>,</strong> tiket Anda berhasil dipesan untuk film <em><strong>"<?= $daftar_tiket["Judul"] ?>"</strong></em> dengan harga sekitar: <strong>Rp <?= number_format($daftar_tiket["Harga"], 0, ',', '.') ?></strong></p>
        <?php
        }
        ?>
    </div>
</body>

</html>