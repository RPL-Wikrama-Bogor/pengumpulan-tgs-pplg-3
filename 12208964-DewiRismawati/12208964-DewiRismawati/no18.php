<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h3 {
    margin-top: 20px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
    width: 100%;
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px;
    }

    input[type="number"] {
        padding: 8px;
    }
}
</style>
</head>
<body>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<div class=container>";
            echo "<h3>Data Siswa ke-$i</h3>";
            echo "Nilai MTK: <input type='number' name='mtk[]' required><br>";
            echo "Nilai INDO: <input type='number' name='indo[]' required><br>";
            echo "Nilai INGG: <input type='number' name='ingg[]' required><br>";
            echo "Nilai DPK: <input type='number' name='dpk[]' required><br>";
            echo "Nilai Agama: <input type='number' name='agama[]' required><br>";
            echo "Kehadiran (%): <input type='number' name='kehadiran[]' required><br><br>";
            echo "</div>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
    </form>
</body>
</html>

        <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mtk = $_POST['mtk'];
            $indo = $_POST['indo'];
            $ingg = $_POST['ingg'];
            $dpk = $_POST['dpk'];
            $agama = $_POST['agama'];
            $kehadiran = $_POST['kehadiran'];
        
            $juara = [];
            for ($i = 0; $i < count($mtk); $i++) {
                $totalNilai = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];
                $rataRata = $totalNilai / 5;
        
                if ($rataRata >= 95 && $kehadiran[$i] >= 100) {
                    $juara[] = "Siswa ke-" . ($i + 1);
                }
            }
        
            if (count($juara) > 0) {
                echo "Siswa yang menjadi juara kelas:<br>";
                foreach ($juara as $siswa) {
                    echo "$siswa<br>";
                }
            } else {
                echo "Tidak ada siswa yang memenuhi syarat juara kelas.";
            }
        }
            ?>