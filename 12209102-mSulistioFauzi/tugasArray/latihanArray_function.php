<?php

$dataSiswa = [
    [
        "nama" => "tukul",
        "nis" => "12201111",
        "usia" => "16"
    ],
    [
        "nama" => "batok",
        "nis" => "12202222",
        "usia" => "18"
    ],
    [
        "nama" => "yuyut",
        "nis" => "12203333",
        "usia" => "15"
    ],
    [
        "nama" => "dupan",
        "nis" => "12204444",
        "usia" => "21"
    ],
    [
        "nama" => "enur",
        "nis" => "12205555",
        "usia" => "19"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f0f0;
    }

    center {
        text-align: center;
    }

    table {
        width: 60%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        border-radius: 10px;
    }

    table, th, td {
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 10px;
    }

    input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>


    
</head>
<body>
    <center>
    <h2>Data Murid TK Tadika Mesra</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Umur</th>
        </tr>
        <?php
        foreach ($dataSiswa as $nama_siswa) {
            echo "<tr>";
            echo "<td>" . $nama_siswa["nama"] . "</td>";
            echo "<td>" . $nama_siswa["nis"] . "</td>";
            echo "<td>" . $nama_siswa["usia"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <form action="" method="post">

    <input type="text" name="cariNama" placeholder="Cari Nama">
    <button type="submit" name="cari" style="color:black;">Cari</button>

    <br>
    <br>

    <button type="submit" name="data" style="color:black;">Tampilkan data usia 17 Tahun ke atas</button>



    
    </form>

</body>
</html>


<?php

if(isset($_POST["data"])){
    foreach($dataSiswa as $tampil){ 
        if($tampil["usia"] >= 17) {?>
        <center>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Nis</th>
                <th>Usia</th>
            </tr>
            <tr>
                <td><?= $tampil["nama"]?></td>
                <td><?= $tampil["nis"]?></td>
                <td><?= $tampil["usia"]?></td>
            </tr>
        </table>

    <?php
            }
        }
    }


if(isset($_POST["cari"])){
    $cariNama = $_POST["cariNama"];
    $namaDitemukan = false;

    foreach($dataSiswa as $tampil){ 
        if(strtolower($cariNama) == strtolower($tampil["nama"])) { // strtolower untuk merubah huruf menjadi huruf kecil
            $namaDitemukan = true;
            ?>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Usia</th>
                </tr>
                <tr>
                    <td><?= $tampil["nama"]?></td>
                    <td><?= $tampil["nis"]?></td>
                    <td><?= $tampil["usia"]?></td>
                </tr>
            </table>
            <?php
            break;
        }
    }

    if (!$namaDitemukan) {
        echo "<p style='color:red; font-size:15px;'><i><s>Nama yang diinputkan tidak ditemukan</s></i></p>";
    }
}
?>





