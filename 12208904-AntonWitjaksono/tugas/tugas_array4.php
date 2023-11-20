<?php
$data_siswa = [
    ["Fania", 17, "12208997", "PPLG"],
    ["Anton", 17, "12208904", "PPLG"],
    ["Gama", 17, "12209021", "PPLG"],
    ["Fajar", 16, "12208892", "PPLG"],
    ["Bahtiar", 18, "12209087", "PPLG"],
    ["Fahrel", 19, "12209268", "PPLG"],
    ["Taupik", 16, "12209115", "PPLG"],
    ["Naufal", 16, "12209250", "PPLG"],
    ["Fawaz", 16, "12209233", "PPLG"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menampilkan Data Usia di Atas 17 Tahun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;

        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .output-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #d50000;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Menampilkan Data Siswa</h1>

        <h2>Tampilkan Data Usia di Atas 17 Tahun</h2>
        <form method="post" action="">
            <button type="submit" name="submit">Tampilkan Data</button>
        </form>
        <div class="output-container" id="output"></div>

        <h2>Cari Data</h2>
        <form method="post" action="">
            <input type="text" name="input_nama" placeholder="Cari Nama" required>
            <button type="submit" name="cari_nama">Cari</button>
        </form>
        <div class="output-container" id="searchResult"></div>

        <?php
        // Tampil
        function displayData($data) {
            echo '<table>';
            echo '<tr><th>Nama</th><th>Umur</th><th>NIS</th><th>Rombel</th></tr>';
            foreach ($data as $person) {
                echo "<tr><td>" . $person[0] . "</td><td>" . $person[1] . "</td><td>" . $person[2] . "</td><td>" . $person[3] . "</td></tr>";
            }
            echo '</table>';
        }

        if (isset($_POST["submit"])) {
            $filter_umur = array_filter($data_siswa, function ($person) {
                return $person[1] >= 17;
            });
            displayData($filter_umur);
        }

        // Cari
        if (isset($_POST["cari_nama"])) {
            $cari = strtolower($_POST["input_nama"]);
            $hasil_cari = [];

            foreach ($data_siswa as $person) {
                $fullName = strtolower($person[0] . " " . $person[1] . " " . $person[2] . " " . $person[3]);
                if (strpos($fullName, $cari) !== false) {
                    $hasil_cari[] = $person;
                }
            }

            if (empty($hasil_cari)) {
                echo "<div class='output-container'>Tidak ada hasil yang cocok.</div>";
            } else {
                displayData($hasil_cari);
            }
        }
        ?>
    </div>
</body>
</html>
