

<?php 
$nama = "";
$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
?>

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
            background-color: #f4f4f4;
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
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perhitungan Gaji</h2> 
        <form action="" method="post">
            <label for="nama">Masukkan Nama Anda:</label>
            <input type="text" name="nama" id="nama">
            
            <label for="gaji_pokok">Masukkan Gaji Pokok Anda:</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok">
            
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

                echo "Nama: ". $nama ;
                echo " Tunjangan :Rp " . $tunj ;
                echo " Pajak : Rp " . $pjk;
                echo " Gaji Bersih : Rp " . $gaji_bersih;
            }

?>
        </div>
    </div>
</body>
</html>
