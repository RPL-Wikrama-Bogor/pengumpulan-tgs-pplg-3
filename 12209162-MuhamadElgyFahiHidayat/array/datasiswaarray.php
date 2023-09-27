<?php

$dataSiswa = [
    [
        "nama" => "tukul",
        "nis" => "12201111",
        "usia" => "18"
    ],
    [
        "nama" => "batok",
        "nis" => "12202222",
        "usia" => "17"
    ],
    [
        "nama" => "ELL",
        "nis" => "12201234",
        "usia" => "24"
    ],
    [
        "nama" => "TIO",
        "nis" => "1220098",
        "usia" => "14"
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
        form{
            margin-top: 150px;
        }
    </style>
</head>
<body>

<center>
    
    <form action="" method="post">

    <button type="submit" name="data">Data Usia 17 Tahun ke atas</button>
    <br>
    <br>
    <!-- <?php if( isset($salah) ) {?>
        <p style="color:red;">Nama kurang tepat</p>
        <?php
        }
        ?> -->

    <input type="text" name="cariNama" placeholder="Cari Nama">
    <button type="submit" name="cari">Cari</button>

    
    </form>

</body>
</html>


<?php

    if(isset($_POST["cari"])){
        $cariNama = $_POST["cariNama"];

        foreach($dataSiswa as $tampil){ 
            if($cariNama == $tampil["nama"]) {
                ?>
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
            // else {
            //     $salah = true;
            // }
            // break;
        }
    }
    
            ?>

    
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
?>