<?php
$waktu;
$jam;
$menit;
$detik;
// = "" untuk mendefinisikan bahwa variable ini tipe datanya string
$hasil = "";
?>
<!-- siapkan input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu</title>
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
        <h2>Konversi Waktu</h2>
        <form action="" method="post">
            <label for="waktu">Masukkan waktu (detik):</label>
            <input type="number" id="waktu" name="waktu" required>
            <button type="submit" name="submit">Kirim</button>
        </form>
        <div class="result">
<!-- proses -->
<?php
    if (isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        // decision
        if ($waktu >= 3600) {
            // floor : membulatkan ke bawah
            // ceil : membualatkan ke atas
            // round : membulatkan keatas dan kebawah
            $jam = floor($waktu/3600);
            $waktu -= ($jam*3600);
            $hasil .= $jam . " jam ";
        }
        else {
            echo"0 jam ";
        }
        if ($waktu >= 60) {
            $menit = floor($waktu/60);
            $waktu -= ($menit*60);
            $hasil .= $menit . " menit ";
        }
        else {
            echo "0 menit ";
        }
        $detik = $waktu;
        $hasil .= $detik . " detik ";
        echo $hasil;
    }
?>
        </div>
    </div>
</body>
</html>