<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Film</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1>Pemesanan Tiket Film</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul Film</th>
                    <th>Usia Minimum</th>
                    <th>Harga Tiket</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $film = array(
                    "film1" => array(
                        "judul" => "One Piece : Movie RED",
                        "min_usia" => 13,
                        "harga" => 50000
                    ),
                    "film2" => array(
                        "judul" => "Shawshank Redemption",
                        "min_usia" => 18,
                        "harga" => 50000
                    ),
                    "film3" => array(
                        "judul" => "The Dark Knight",
                        "min_usia" => 13,
                        "harga" => 50000
                    ),
                    "film4" => array(
                        "judul" => "Boboiboy : The Movie",
                        "min_usia" => 10,
                        "harga" => 50000
                    ),
                    "film5" => array(
                        "judul" => "Avengers : Infinity War",
                        "min_usia" => 13,
                        "harga" => 50000
                    ),
                );

                foreach ($film as $key => $info) {
                    echo "<tr>";
                    echo "<td>" . $info["judul"] . "</td>";
                    echo "<td>" . $info["min_usia"] . " tahun</td>";
                    echo "<td>" . $info["harga"] . " IDR</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    <div class="container">
        <h1>Pemesanan Tiket Film</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="judul_film">Pilih Judul Film:</label>
                        <select class="form-control" id="judul_film" name="judul_film">
                            <option value="film1">One Piece : Movie RED</option>
                            <option value="film2">Shawshank Redemption</option>
                            <option value="film3">The Dark Knight</option>
                            <option value="film4">Boboiboy : The Movie</option>
                            <option value="film5">Avengers : Infinity War</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia Anda:</label>
                        <input type="number" class="form-control" id="usia" name="usia">
                    </div>
                    <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <?php
                // Daftar film dengan batasan usia
                $film = array(
                    "film1" => array(
                        "judul" => "One Piece : Movie RED",
                        "min_usia" => 13,
                        "harga" => 50000
                    ),
                    "film2" => array(
                        "judul" => "Shawshank Redemption",
                        "min_usia" => 18,
                        "harga" => 50000
                    ),
                    "film3" => array(
                        "judul" => "The Dark Knight",
                        "min_usia" => 13,
                        "harga" => 50000
                    ),
                    "film4" => array(
                        "judul" => "Boboiboy : The Movie",
                        "min_usia" => 10,
                        "harga" => 50000
                    ),
                    "film5" => array(
                        "judul" => "Avengers : Infinity War",
                        "min_usia" => 13,
                        "harga" => 50000
                    ),
                );

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $judul_film = $_POST["judul_film"];
                    $usia = $_POST["usia"];

                    // Validasi usia
                    if ($usia < $film[$judul_film]["min_usia"]) {
                        echo "<p class='text-danger'>Maaf, Anda belum cukup usia untuk menonton film ini.</p>";
                    } else {
                        echo "<p class='text-success'>Selamat menonton " . $film[$judul_film]["judul"] . "!</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Tambahkan link Bootstrap JavaScript dan jQuery di sini -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
