<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pemesanan tiket</h3>
    <form action="" method="post">
        <label for="usia">Masukan usia anda: </label><br>
        <input type="number" name="usia" id="usia"><br>
        <label for="judul">Pilih judul yang ingin anda tonton: </label><br>
        <select name="judul" id="judul">
            <option value="Miracle in Cell No.7">Miracle in Cell No.7</option>
            <option value="Duty After School">Duty After School</option>
            <option value="All Of Us Are Dead">All Of Us Are Dead</option>
            <option value="Elemental">Elemental</option>
            <option value="Barbie">Barbie</option>
        </select><br><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$usia_pemesan = $_POST['usia'];
$judul_terpilih = $_POST['judul']; // Ganti dengan nilai usia yang sesuai dengan inputan

$pemesanan = [
[
    "judul" => "Miracle in Cell No.7",
    "min_usia" => 15,
    "harga" => 45000
],
[
    "judul" => "Duty After School",
    "min_usia" => 17,
    "harga" => 45000
],
[
    "judul" => "All Of Us Are Dead",
    "min_usia" => 17,
    "harga" => 45000
],
[
    "judul" => "Elemental",
    "min_usia" => 12,
    "harga" => 45000
],
[
    "judul" => "Barbie",
    "min_usia" => 15,
    "harga" => 45000
]
];
$film_terpilih = null;
foreach ($pemesanan as $film){
    if($film["judul"] == $judul_terpilih){
        $film_terpilih = $film;
        break;
    }
}
if ($film_terpilih) {
if ($usia_pemesan >= $film_terpilih["min_usia"]) {
    // Pemesan memenuhi persyaratan usia, mereka dapat menonton
    echo "Selamat menonton film " . $film_terpilih["judul"] . "<br> Harga tiket: Rp " . $film_terpilih["harga"];
}else {
    // Pemesan tidak memenuhi persyaratan usia
    echo "Maaf, Anda tidak dapat menonton film " . $film_terpilih["judul"] . " karena usia Anda kurang dari " . $film_terpilih["min_usia"] . " tahun.";
}
} else {
    echo "Film tidak tersedia";
}
}
?>
