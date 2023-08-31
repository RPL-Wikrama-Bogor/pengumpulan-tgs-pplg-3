<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Converter</title>
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
        <h1>Time Converter</h1>
    </header>
    <div class="container">
        <form action="" method="post">
            <label for="waktu">Total Waktu (detik): </label>
            <input type="text" name="waktu" required>
            <button type="submit" name="submit">Konversi</button>
        </form>

        <?php
        $waktu;
        $j;
        $m;
        $s;
        $hasil = [2];
        if (isset($_POST["submit"])) {
            $waktu = $_POST["waktu"];

            $j = floor($waktu / 3600) ;
            $hasil[0] = $waktu - $j * 3600;

            $m = floor($hasil[0] / 60); 
            $hasil[1] = $hasil[0] - $m * 60;


            $s =  floor($hasil[1]);


            echo '<div class="result">';
            echo "Waktu yang dikonversi menjadi: $j Jam, $m Menit, $s Detik";
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>