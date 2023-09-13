<?php

    $film = [
    [
        "judul" => "The Nun",
        "min-usia" => "15",
        "harga" => 34.999
    ],
    [
        "judul" => "Spiderman No Way Home",
        "min-usia" => "15",
        "harga" => 39.999
    ],
    [
        "judul" => "Jakarta vs Everybody",
        "min-usia" => "17",
        "harga" => 24.999
    ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tiket.css">
    <title>Document</title>

    

</head>
<body>
    <center>
    <div class="menu">
        <h2>Daftar Film</h2>
        <?php
        foreach ($film as $data) { ?>
            <div class="film-list">
                <span class="film-title"><?= $data["judul"]; ?></span>
                <div class="film-details">
                    Minimum Usia: <?= $data["min-usia"]; ?> tahun<br>
                    Harga: Rp<?= $data["harga"]; ?>,00
                </div>
            </div>
        <?php } ?>
    </div>
    <form action="" method="post">
        <label for="">Usia</label>
        <input type="number" name="usia">
        <br>
        <label for="judul">Judul</label>
        <select name="judul" id="judul" raquired>

        <?php
            foreach($film as $data){
                echo "<option value='{$data['judul']}'>{$data['judul']}</option>";
            }
            ?>

        </select>
        <br>
        <button type="submit" name="kirim">Submit</button>
        <br>
        ------------------------------------------------------
    </form>

</body>
</html>

<?php
        if(isset($_POST["kirim"])){
            $umur = $_POST["usia"];
            $judul = $_POST["judul"];

            foreach($film as $data){
                if($judul == $data["judul"]){
                    if($umur >= $data["min-usia"]){
                        echo "<div class='hasil'>Anda Berhasil Membeli tiket dengan harga Rp". $data['harga'] .",00</div>";
                    }
                    else {
                        echo "<div class='hasil'>Maaf, anda tidak bisa menonton film karena umur anda kurang dari ". $data['min-usia']. " tahun</div>";
                    }
                    break;
                }
            }
        }
    
?>