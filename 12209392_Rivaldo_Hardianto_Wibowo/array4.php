<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$data = array(
    array(
        "nama" => "Rivaldo",
        "nis"  => "1220382",
        "rombel" => "pplg",
        "usia" => "17"
    ),
    array(
        "nama" => "rembo",
        "nis"  => "12923821",
        "rombel" => "tekejek",
        "usia" => "15"
    ),
    array(
        "nama" => "jonotiono",
        "nis"  => "34277729",
        "rombel" => "pemasaran",
        "usia" => "18"
    ),
    array(
        "nama" => "siuuu",
        "nis"  => "1220382",
        "rombel" => "dkv",
        "usia" => "19"
    )
);
?>

<ol>
    <?php
    foreach ($data as $nama) {
        echo "<li>
         Nama : ". $nama['nama'] ."<br>" . 
        "Nis : ". $nama['nis'] . "<br>" . 
        "rombel : ". $nama['rombel'] . "<br>" . 
        "usia : ". $nama['usia'] .
        "</li>";
        echo "<br>";
    }
    ?>
</ol>
<form action="" method="post">
    <label for="cari">masukan data yang ingin dicari</label>
<input type="text" name="search" id="cari" placeholder="masukan data yang ingin dicari">
<br>
<input type="submit" value="cari">

</form>

</body>
</html>

<?php
if (isset($_POST['search'])) {
    $cari = $_POST['search'];

    $bro = array();
    foreach ($data as $de) {
        if (in_array($cari,$de)) {
            $bro[] = $de;
        }
    }

    if (!empty($bro)) {
        echo "data yang cocok dengan '$cari': <br>";
        foreach ($bro as $boo) {
            echo "nama : " . $boo['nama'] . ", nis : " . $boo['nis'] . ", rombel : " . $boo['rombel'] . ", umur : " . $boo['usia'];
        }
    } else{
        echo "data yang cocok dengan '$cari' tidak ditemui";
    }
}
?>