<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <h3>PEMESANAN TIKET</h3>
        <form method="post">
            <div class="circle">
                <label for="judul">Pilih judul Film</label>
                <select name="judul" id="judul" class="judul">
                    <option value="Pocong Mumun">Pocong Mumun</option>
                    <option value="The Nun 2">The Nun 2</option>
                    <option value="Kalian Pantas Mati" selected="selected">Kalian Pantas Mati</option>
                    <option value="Kuntilanak 3">Kuntilanak 3</option>
                    <option value="Nenek Gayung">Nenek Gayung</option>
                </select>


            </div>

            <label for="usia">Masukan Usia</label>
            <input type="number" id="usia" name="usia" placeholder="Usia" required>

            <label for="harga">
                <h4>Harga Tiket : Rp.45.000</h4>
            </label>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $usia = $_POST["usia"];

    // Define an associative array of movie titles and their age restrictions
    $judulFilm = [
        "Pocong Mumun" => 15,
        "The Nun 2" => 15,
        "Kalian Pantas Mati" => 15,
        "Kuntilanak 3" => 15,
        "Nenek Gayung" => 15
    ];

    $data = [
        'usia' => 15,
        'harga' => 45000
    ];

    // Get the selected movie title from the POST data
    $selectedJudul = $_POST["judul"];

    // Check if the selected movie title exists in the associative array
    if (array_key_exists($selectedJudul, $judulFilm)) {
        $requiredUsia = $judulFilm[$selectedJudul];
        if ($usia < $requiredUsia) {
            echo "<h2 class='gagal'>Mohon maaf anda belum cukup umur untuk '$selectedJudul'</h2>";
        } else {
            echo "<h2 class='berhasil'>Selamat tiket berhasil di beli</h2>";
            echo "<h3 class='film'>Film yang anda pilih adalah '$selectedJudul'</h3>";
        }
    } else {
        echo "<h2 class='gagal'>Film yang anda pilih tidak valid</h2>";
    }
}

?>