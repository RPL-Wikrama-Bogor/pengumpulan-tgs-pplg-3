<?php
$siswa = [
    [
        "nama" => "Anasya",
        "nis" => "123456",
        "rombel" => "PPLG XI-3",
        "rayon" => "Wikrama",
        "umur" => 17,
    ],
    [
        "nama" => "Apan",
        "nis" => "124586",
        "rombel" => "PPLG XI-4",
        "rayon" => "Wikrama",
        "umur" => 20,
    ],
    [
        "nama" => "Bora",
        "nis" => "232983",
        "rombel" => "PPLG XI-9",
        "rayon" => "Cibedug",
        "umur" => 6,
    ],
    [
        "nama" => "Milo",
        "nis" => "329843",
        "rombel" => "PPLG XI-2",
        "rayon" => "Ujungdunia",
        "umur" => 18,
    ],
];

//fungsi nyari siswa yang 17+
function cariUsiaLebihDari17($siswa){
    $hasilCari = [];
    foreach ($siswa as $data){
        if ($data["umur"] >= 17){
            $hasilCari[] = $data;
        }
    }
    return $hasilCari;
}

function cariBerdasarkanNama($siswa, $namaCari){
    $hasilPencarian = [];
    foreach($siswa as $data){
        if ($data["nama"] == $namaCari){
            $hasilPencarian[] = $data;
        }
    }
    return $hasilPencarian;
}

    if (isset($_POST["cariUsia"])) {
        $hasilPencarian = cariUsiaLebihDari17($siswa);
    } elseif (isset($_POST["cariNama"])) {
        $namaCari = $_POST["namaCari"];
        $hasilPencarian = cariBerdasarkanNama($siswa, $namaCari);
        usort($hasilPencarian, function($a, $b) {
            return $b["umur"] - $a["umur"];
        });
    } else {
        $hasilPencarian = $siswa;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Cari siswa</title>
    <style>

        body {
            background-color: #CEDEBD;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .content {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
            width: 500px;
            padding: 20px;
            text-align: center;
            background-color: #FAF1E4;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #435334;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 5px 10px;
            font-size: 13px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #9EB384;
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px #999;
        }

        .button:hover {background-color: #435334}

        .button:active {
            background-color: #9EB384;
            box-shadow: 0 2px #666;
            transform: translateY(2px);
        }

        input[type=text] {
            border: 1px solid #9EB384;
            border-radius: 4px;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=text]:focus {
            background-color: #CEDEBD;
            border: 2px solid #435334;
        }

    </style>
</head>
<body>
    <div class="content">
    <h1>Cari Siswa</h1>
    <form method="post">
        <label>Cari siswa yang lebih dari 17 tahun : </label>
        <input class="button" type="submit" name="cariUsia" value="cari">
    </form>
    <form method="post">
        <label>Cari siswa berdasarkan nama : </label>
        <input class="input" type="text" name="namaCari">
        <input class="button" type="submit" name="cariNama" value="cari">
    </form>

    <h2>Hasil Pencarian : </h2>
    <ul>
        <?php foreach ($hasilPencarian as $siswa) : ?>
            <li><?= $siswa["nama"] ?> , umur <?= $siswa["umur"] ?> tahun , <?= $siswa['nis'] ?> , <?= $siswa['rombel'] ?> , <?= $siswa['rayon'] ?></li>
        <?php endforeach; ?>
    </ul>
    </div>

</body>
</html>