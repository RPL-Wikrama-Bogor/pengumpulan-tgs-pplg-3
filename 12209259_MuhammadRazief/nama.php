<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           body{
            font-family:sans-serif;
            background-color: #ECF8F9;
            margin:0;
            padding:0;
        }
         h1 {
            text-align: center;
            color:#4477CE;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 5px;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            transition:background-color 0.3s;
            cursor: pointer;
            border-radius:10px;
        }
        button:hover {
            background-color: #7D7463;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 70%;
            border: 1px solid #ccc;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        li {
            display: inline-block;
            margin: 10px;
        }
        .hasil {
            text-align: center;
            margin-top: 20px;
            padding-bottom: 100px;
        }
    </style>
</head>
<body>  
    <?php
    $siswa = [
        [
            "nama" => "razief",
            "nis" => "12209259",
            "umur" => 16,
        ],
        [
            "nama" => "tegar",
            "nis" => "11907155",
            "umur"  => 16,
        ],
        [
            "nama" => "iqbal",
            "nis" => "11907156",
            "umur" => 17,
        ],
        [
            "nama" => "sulistio",
            "nis" => "11907157",
            "umur" => 17,
        ]
    ];
    ?>

    <h1>Data Siswa</h1>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Umur</th>
        </tr>
        <?php
        foreach ($siswa as $nama_siswa) {
            echo "<tr>";
            echo "<td>" . $nama_siswa["nama"] . "</td>";
            echo "<td>" . $nama_siswa["nis"] . "</td>";
            echo "<td>" . $nama_siswa["umur"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <form action="?cari_17_tahun" method="post">
        <button type="submit" name="cari_17_tahun">Tampilkan yang berusia 17 tahun ke atas</button>
    </form>

    <h1>Cari berdasarkan nama</h1>
    
    <form action="" method="post">
        <input type="text" name="btn" id="input_nama">
        <button type="submit" name="submit">Cari</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST["btn"];
        $siswa_ditemukan = false;

        foreach ($siswa as $nama_siswa) {
            if ($nama == $nama_siswa['nama']) {
                echo "<div class='hasil'>";
                echo "<h2>Hasil Pencarian</h2>";
                echo "<table>";
                echo "<tr>";
                echo "<th>Nama</th>";
                echo "<th>NIS</th>";
                echo "<th>Umur</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>" . $nama_siswa["nama"] . "</td>";
                echo "<td>" . $nama_siswa["nis"] . "</td>";
                echo "<td>" . $nama_siswa["umur"] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</div>";
                $siswa_ditemukan = true;
            }
        }

        if (!$siswa_ditemukan) {
            echo "<div class='hasil'>Nama tidak sesuai.</div>";
        }
    }
    ?>

    <?php
    if (isset($_POST['cari_17_tahun'])) {
        echo "<div class='hasil'>";
        echo "<h2>Siswa Berusia 17 Tahun ke Atas</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<th>NIS</th>";
        echo "<th>Umur</th>";
        echo "</tr>";
        foreach ($siswa as $nama_siswa) {
            if ($nama_siswa["umur"] >= 17) {
                echo "<tr>";
                echo "<td>" . $nama_siswa["nama"] . "</td>";
                echo "<td>" . $nama_siswa["nis"] . "</td>";
                echo "<td>" . $nama_siswa["umur"] . "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
</html>
