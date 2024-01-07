<?php
$data_siswa = [
    ["nama" => "Mohammad Riyan Dzaki Athilla", "nis" => "12209141", "rombel" => "PPLG", "umur" => "16"],
    ["nama" => "Gama Husen", "nis" => "12209021", "rombel" => "PPLG", "umur" => "16"],
    ["nama" => "Raden Fariz Atilla Ahya", "nis" => "12209344", "rombel" => "TJKT", "umur" => "16"],
    ["nama" => "Muhammad Daffi Fauzan Abdul Rohman", "nis" => "12209217", "rombel" => "PPLG", "umur" => "17"],
    ["nama" => "Muhammad Bahrul Widad Sauqi", "nis" => "12209839", "rombel" => "TJKT", "umur" => "17"],
];

if (isset($_POST["cari"])) {
    $cari = $_POST["keyword"];
    $key = array_search($cari, $data_siswa);
}

function cekKataKunci($item)
{
    global $cari;
    return stripos($item["nama"], $cari) !== false;
}
$hasilPencarian = array_filter($data_siswa, "cekKataKunci");
function filterUmurLebihDari17($siswa)
{
    return $siswa["umur"] >= 17;
}

// Menggunakan fungsi array_filter untuk menyaring data
$dataHasilFilter = array_filter($data_siswa, "filterUmurLebihDari17");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .search-box {
            margin-top: 20px;
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 5px;
            margin: 20px;
            width: 95%;
        }

        button {
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100px;
            margin-left: 6px;
        }

        .result-box {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="search-box">
            <form action="" method="post">
                <label for="">Cari dari keyword nama</label>
                <input type="text" name="keyword">
                <button type="submit" name="cari">Cari</button>
            </form>
        </div>

        <?php
        if (isset($_POST["cari"])) {

            if (!empty($hasilPencarian)) {
                foreach ($hasilPencarian as $item) {
        ?>
                    <div class="result-box">
                        <p>Hasil Data:</p>
                        <ul>
                            <li>Nama: <?php echo $item["nama"] ?></li>
                            <li>Nis: <?php echo $item["nis"] ?></li>
                            <li>Umur: <?php echo $item["umur"] ?></li>
                            <li>Rombel: <?php echo $item["rombel"] ?></li>
                        </ul>
                    </div>
        <?php
                }
            } else {
                echo '<div class="result-box">Tidak ada hasil.</div>';
            }
        }
        ?>

        <div class="search-box">
            <form action="" method="post">
                <label for="">Tampilkan Data yang berumur 17 tahun</label>
                <button type="submit" name="submit">Tampilkan</button>
            </form>
        </div>

        <?php
        if (isset($_POST["submit"])) {
            foreach ($dataHasilFilter as $siswa) {
        ?>
                <div class="result-box">
                    <p>Nama dari data yang 17 tahun adalah: <?= $siswa["nama"] ?> </p>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>