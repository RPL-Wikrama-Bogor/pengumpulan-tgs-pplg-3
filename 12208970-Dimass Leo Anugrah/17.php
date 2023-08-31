<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Max, Min, Ave</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        p.result {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div id="wrap">
                <div class="input-group">
                    <label for="angka">Masukkan Angka:</label>
                    <input type="number" name="angka[]" id="angka">
                </div>
            </div>
            <p style="cursor: pointer; color: blue" onclick="tambahInput()">Tambah Input Form</p>
            <button type="submit" name="submit">Kirim</button>
        </form>
        <?php
        $arrAngka = [];
        $nilaiTerbesar;
        $nilaiTerkecil;
        $rataRata;

        if (isset($_POST['submit'])) {
            $arrAngka = $_POST['angka'];
            $nilaiTerbesar = max($arrAngka);
            $nilaiTerkecil = min($arrAngka);
            $rataRata = array_sum($arrAngka) / count($arrAngka);

            echo '<p class="result">Nilai terbesar: ' . $nilaiTerbesar . '<br>';
            echo 'Nilai terkecil: ' . $nilaiTerkecil . '<br>';
            echo 'Rata-rata: ' . $rataRata . '</p>';
        }
        ?>
    </div>
    <script>
        let jumlahInput = 1;
        function tambahInput() {
            let inputElement = `
            <div class="input-group">
                <label for="angka">Masukkan Angka:</label>
                <input type="number" name="angka[]" id="angka">
            </div>
            `;
            jumlahInput += 1;
            if (jumlahInput < 10) {
                document.getElementById('wrap').innerHTML += inputElement;
            }
        }
    </script>
</body>
</html>
