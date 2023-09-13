<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>One Piece Movie</title>
</head>
<body>
    <div class="tampilan-awal">
        <img src="1325987.jpeg" alt="">
        <div class="teks">
            <p class="head" style="color: #fff; font-size: 10vh; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">One Piece<br>
                <button style="background-color: #1a7bb0; color: #fff; border-radius: 5px; border: none; width: 100px; height: 30px;">
                    <a href="#one-piece-movie" style="text-decoration: none; color: inherit;">Movie</a>
                </button>
            </p>
        </div>
        <div class="wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0b0d0d" fill-opacity="1" d="M0,192L40,208C80,224,160,256,240,245.3C320,235,400,181,480,176C560,171,640,213,720,234.7C800,256,880,256,960,229.3C1040,203,1120,149,1200,138.7C1280,128,1360,160,1400,176L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
        </div>
        <div class="movie" id="one-piece-movie"></div>
    </div>

    <div class="tampilan-isi">
        <h1>One Piece Movie</h1><br>
        <div class="card-grid">
            <?php
            $movies = [
                [
                    'title' => 'Strong World',
                    'price' => 150000,
                ],
                [
                    'title' => 'Gold',
                    'price' => 100000,
                ],
                [
                    'title' => 'Red',
                    'price' => 150000,
                ],
                [
                    'title' => 'Z',
                    'price' => 100000,
                ],
                [
                    'title' => 'Stampede',
                    'price' => 150000,
                ],
            ];

            foreach ($movies as $movie) {
                echo '<div class="card">';
                echo '<img src="' . strtolower($movie['title']) . '.jpeg" alt="' . $movie['title'] . '">';
                echo '<h2>' . $movie['title'] . '</h2>';
                echo '<p>Rp ' . number_format($movie['price'], 0, ',', '.') . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0b0d0d" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,85.3C672,75,768,117,864,117.3C960,117,1056,75,1152,69.3C1248,64,1344,96,1392,112L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

    <div class="h1">
        <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">Silahkan Pesan</h1>
        <div class="pemesanan-tiket">
            <div class="form-pemesanan">
                <h2>Pemesanan Tiket</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="judul">
                        <label for="judul_film">Pilih Judul Film:</label><br>
                        <select style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 90vh;" id="judul_film" name="judul_film">
                            <?php
                            foreach ($movies as $index => $movie) {
                                echo '<option value="film' . ($index + 1) . '">' . $movie['title'] . '</option>';
                            }
                            ?>
                        </select>
                    </div><br>
                    <div class="usia">
                        <label for="usia">Usia Anda:</label><br>
                        <input style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 90vh;" type="number" id="usia" name="usia">
                    </div><br>
                    <div class="jumlah-tiket">
                        <label for="jumlah_tiket">Jumlah Tiket:</label><br>
                        <input style="border-radius: 5px; border: none; background-color: #f0f0f0; width: 90vh;" type="number" id="jumlah_tiket" name="jumlah_tiket" value="">
                    </div><br>
                    <button style="background-color: #1a6ab0; color: #fff; border-radius: 5px; border: none; width: 100px; height: 30px;" type="submit" name="pesan_tiket">Pesan Tiket</button>
                </form>
            </div>
            <div class="pembayaran">
                <h2>Keterangan Pemesanan</h2>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pesan_tiket"])) {
                    $movies = [
                        "film1" => [
                            "title" => "One Piece : Movie RED",
                            "min_usia" => 13,
                            "price" => 50000,
                        ],
                        "film2" => [
                            "title" => "One Piece : Film Z",
                            "min_usia" => 13,
                            "price" => 50000,
                        ],
                        "film3" => [
                            "title" => "One Piece : Movie Gold",
                            "min_usia" => 13,
                            "price" => 50000,
                        ],
                        "film4" => [
                            "title" => "One Piece : Movie Strong World",
                            "min_usia" => 13,
                            "price" => 50000,
                        ],
                        "film5" => [
                            "title" => "One Piece : Movie Stampede",
                            "min_usia" => 13,
                            "price" => 50000,
                        ],
                    ];

                    $selected_movie = $_POST["judul_film"];
                    $usia = $_POST["usia"];
                    $jumlah_tiket = $_POST["jumlah_tiket"];

                    if ($usia < $movies[$selected_movie]["min_usia"]) {
                        echo "<p style='font-size: 15px;' class='text-danger'>Maaf, Anda belum cukup usia untuk menonton film ini.</p>";
                    } else {
                        $harga_per_tiket = $movies[$selected_movie]["price"];
                        $total_harga = $jumlah_tiket * $harga_per_tiket;

                        echo "<p style='font-size: 15px;' class='text-success'>Selamat, Anda telah memesan " . $jumlah_tiket . " tiket untuk " . $movies[$selected_movie]["title"] . ".</p>";
                        echo "<p style='font-size: 15px;' class='text-success'>Total harga tiket yang di pesan : Rp " . number_format($total_harga, 2, ',', '.') . "</p>";
                    }
                }
                ?>
                <p style="font-size: 16px; float: right; padding-top: 120px;"><b>-OPMovie</b></p>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2023 OPMovie. by sagyra
    </div>
</body>
</html>
