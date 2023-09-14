<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Tiket Bioskop</title>
</head>
<body>
    <h1>Pemesanan Tiket Bioskop</h1>
    <form method="POST" action="">
        <label for="usia">Usia Anda:</label>
        <input type="number" name="usia" id="usia" required><br>

        <label for="judul_film">Judul Film yang Ingin Ditonton:</label>
        <select name="judul_film" id="judul_film" required>
            <option value="Avengers: Endgame">Avengers: Endgame</option>
            <option value="Spider-Man: No Way Home">Spider-Man: No Way Home</option>
            <option value="The Conjuring: The Devil Made Me Do It">The Conjuring: The Devil Made Me Do It</option>
            <option value="Shang-Chi and the Legend of the Ten Rings">Shang-Chi and the Legend of the Ten Rings</option>
            <!-- Anda dapat menambahkan opsi film lainnya di sini -->
        </select><br>

        <input type="submit" name="submit" value="Pesan Tiket">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Daftar film beserta usia minimum dan harga tiket
        $daftar_film = [
            "Avengers: Endgame" => ["usia_minimum" => 15, "harga" => 150000],
            "Spider-Man: No Way Home" => ["usia_minimum" => 15, "harga" => 120000],
            "The Conjuring: The Devil Made Me Do It" => ["usia_minimum" => 15, "harga" => 100000],
            "Shang-Chi and the Legend of the Ten Rings" => ["usia_minimum" => 15, "harga" => 130000],
            // Tambahkan film-film lainnya dengan usia minimum dan harga tiketnya di sini
        ]; 


        // Memproses input dari formulir
        $usia_pengunjung = intval($_POST['usia']);
        $judul_film = $_POST['judul_film'];

        // Periksa apakah judul film ada dalam daftar
        if (array_key_exists($judul_film, $daftar_film)) {
            $film_info = $daftar_film[$judul_film];
            $usia_minimum = $film_info["usia_minimum"];
            $harga_tiket = $film_info["harga"];

            // Periksa apakah usia pengunjung memenuhi persyaratan usia minimum
            if ($usia_pengunjung >= $usia_minimum) {
                echo "<p>Pesanan tiket diterima. Selamat menonton $judul_film!</p>";
                echo "<p>Harga tiket: Rp $harga_tiket</p>";
            } else {
                echo "<p>Maaf, Anda tidak memenuhi usia minimum untuk menonton $judul_film.</p>";
            }
        } else {
            echo "<p>Judul film yang Anda pilih tidak tersedia.</p>";
        }
    }
    ?>
</body>
</html>














