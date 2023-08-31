<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
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
            display: block;
            margin: 0 auto;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Kalkulator Nilai</h1>
        <form action="" method="post">
            <label for="pabp">Nilai Pabp:</label>
            <input type="text" name="pabp" id="pabp" required>

            <label for="mtk">Nilai MTK:</label>
            <input type="text" name="mtk" id="mtk" required>

            <label for="dpk">Nilai DPK:</label>
            <input type="text" name="dpk" id="dpk" required>

            <button type="submit" name="submit">Hitung</button>
        </form>

        <?php
        $nilai_pabp;
        $nilai_mtk;
        $nilai_dpk;
        $rata_rata;

        if (isset($_POST["submit"])) {
            $nilai_pabp = $_POST["pabp"];
            $nilai_mtk = $_POST["mtk"];
            $nilai_dpk = $_POST["dpk"];

            $rata_rata = ($nilai_pabp + $nilai_dpk + $nilai_mtk) / 3;

            $nilai = '';

            if ($rata_rata >= 80 && $rata_rata <= 100) {
                $nilai = 'A';
            } elseif ($rata_rata >= 75 && $rata_rata <= 80) {
                $nilai = 'B';
            } elseif ($rata_rata >= 65 && $rata_rata <= 75) {
                $nilai = 'C';
            } elseif ($rata_rata >= 45 && $rata_rata <= 65 ) {
                $nilai = 'D';
            } elseif ($rata_rata >= 0 && $rata_rata <= 45) {
                $nilai = 'E';
            } else {
                echo "Maaf angka tidak memenuhi syarat";
            }

            echo '<div class="result">';
            echo "Nilai rata-rata: $rata_rata <br>";
            echo "Anda mendapatkan nilai: $nilai";
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>