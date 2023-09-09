
<?php
$angka;
$satuan;
$puluhan;
$ratusan;
$ribuan;
$jutaan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Angka</title>
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
        <h2>Analisis Angka</h2>
        <form action="" method="post">
            <label for="angka">Masukkan angka:</label>
            <input type="number" id="angka" name="angka">
            <button type="submit" name="submit">Kirim</button>
        </form>
        <div class="result">
        <?php
            if (isset($_POST['submit'])) {
                $angka = $_POST['angka'];

                $satuan = floor($angka % 10);
                $puluhan = floor($angka /10 )%10;
                $ratusan = floor(($angka % 1000)/100);  
        
            echo "angka satuan : " . $satuan;
            echo "<br>";
            echo "angka puluhan : " . $puluhan;
            echo "<br>";
            echo "angka ratusan : " . $ratusan;
            echo "<br>";
            }
        ?>
        </div>
    </div>
</body>
</html>
