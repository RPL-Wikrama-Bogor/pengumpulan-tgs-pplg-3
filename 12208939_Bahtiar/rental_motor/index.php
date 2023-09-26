<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom right, lightgreen, yellow);
            width: 500px;
            height: 720px;
            margin: 50px auto;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 500px;
            margin-top: 220px;
            text-align: justify;
        }

        label {
            display: block;
            margin-bottom: 5px;
            flex: 1;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 30px;
            flex: 2;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .center {
        text-align: center;
        margin-bottom: -200px;
        margin-top: 200px;
        }

    </style>
</head>
<body>
<h1 class="center">Rental motor</h1>    
<center>
    <form action="" method="post">
        <div style="display: flex;">
        <label for="nama">Masukkan Nama:</label>
        <input type="text" name="nama" id="nama"  required autocomplete="off" >
        </div>
        <div style="display: flex;">
        <label for="waktu">Lamanya Rental:</label>
        <input type="number" min="0" name="waktu" id="waktu" required>
        </div>
        <div style="display: flex;">
        <label for="jenis">Jenis Motor:</label>
        <select name="jenis">
            <option hidden disabled selected>Pilih Jenis Motor</option>
            <option value="Scoopy">XMax</option>
            <option value="Aerox">Vario</option>
            <option value="Vario">Beat</option>
        </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>
    </form>
    </center>

    <?php
    require 'controller.php';
    $logic = new Pembelian();
    $logic->setHarga(75000,90000,120000);
    if(isset($_POST["sewa"])) {
        if(isset($_POST["jenis"]) && is_string($_POST["jenis"])) {
            $logic->nama_pengguna = $_POST['nama'];
                    $logic->lamaWaktu = $_POST['waktu'];
                    $logic->jenisYangDipilih = $_POST['jenis'];
                    
                    $logic->cetakBukti();
        } else{
            echo "<p style='color: red; font-style: italic; text-align: center;'>Pilih dulu dong motornya!!!</p>"
            ;
        }

    }
    ?>

</body>
</html>



