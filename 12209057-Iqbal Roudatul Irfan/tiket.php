<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Tiket Bioskop</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url(https://img.freepik.com/free-photo/assortment-cinema-elements-red-background-with-copy-space_23-2148457848.jpg?w=1380&t=st=1694575242~exp=1694575842~hmac=1ed2cbf41576e769d426ce84db71e778a33282af8563062248d26ce24026ee2c);
        background-size: cover;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 800px;
    }

    .menu-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .menu-table th, .menu-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    .menu-table th {
        background-color: #DF2E38; /* Warna latar belakang header */
        color: #fff;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    /* Animasi mengetik */
    @keyframes typing {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }

    h1.typing-text::after {
        content: "|"; /* Tanda pipa (|) akan berkedip */
        animation: blink-caret 0.75s step-end infinite;
    }

    h1.typing-text {
        overflow: hidden;
        border-right: 1px solid #333;
        white-space: nowrap;
        margin: 0 auto;
        /* Menggunakan animasi mengetik yang telah didefinisikan */
        animation: typing 4s steps(40, end), blink-caret 0.75s step-end infinite;
    }

    @keyframes blink-caret {
        from, to {
            border-color: transparent;
        }
        50% {
            border-color: #333;
        }
    }

    .welcome-text {
        display: none; /* Sembunyikan teks selamat datang awal */
        text-align: center;
    }

    /* Animasi tampil */
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .welcome-text.show {
        display: block;
        animation: fade-in 2s ease-in-out;
    }

    form {
        width: 100%;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #DF2E38; /* Warna latar belakang tombol */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #F3AA60; /* Warna latar belakang tombol saat hover */
    }

    pre {
        text-align: left;
        font-weight: bold;
        margin-top: 20px;
        color: #000; /* Warna teks hitam */
        background-color: #f0f0f0; /* Warna latar belakang teks */
        padding: 10px;
        border-radius: 5px;
        white-space: pre-wrap;
        border-bottom: 2px solid #000; /* Garis bawah */
        width: 36%; /* Menyesuaikan lebar struk dengan tanda "=" */
    }
</style>

</head>
<body>
    <div class="container">
        <h1 class="typing-text">Pemesanan Tiket Bioskop</h1>
        <br>

        <div class="menu-table">
            <table>
                <thead>
                    <tr>
                        <th>Judul Film</th>
                        <th>Usia Minimum</th>
                        <th>Harga Tiket</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Avengers: Endgame</td>
                        <td>13</td>
                        <td>Rp 45,000</td>
                    </tr>
                    <tr>
                        <td>Spider-Man: No Way Home</td>
                        <td>10</td>
                        <td>Rp 40,000</td>
                    </tr>
                    <tr>
                        <td>The Conjuring: The Devil Made Me Do It</td>
                        <td>16</td>
                        <td>Rp 35,000</td>
                    </tr>
                    <tr>
                        <td>Shang-Chi and the Legend of the Ten Rings</td>
                        <td>12</td>
                        <td>Rp 30,000</td>
                    </tr>
                    <!-- Tambahkan film-film lainnya dengan usia minimum dan harga tiketnya di sini -->
                </tbody>
            </table>
        </div>

        <form method="POST" action="">
            <label for="usia">Usia Anda:</label>
            <input type="number" name="usia" id="usia" required>

            <label for="judul_film">Judul Film yang Ingin Ditonton:</label>
            <select name="judul_film" id="judul_film" required>
                <option value="Avengers: Endgame">Avengers: Endgame</option>
                <option value="Spider-Man: No Way Home">Spider-Man: No Way Home</option>
                <option value="The Conjuring: The Devil Made Me Do It">The Conjuring: The Devil Made Me Do It</option>
                <option value="Shang-Chi and the Legend of the Ten Rings">Shang-Chi and the Legend of the Ten Rings</option>
                <!-- Anda dapat menambahkan opsi film lainnya di sini -->
            </select>

            <input type="submit" name="submit" value="Pesan Tiket">
        </form>

        <script>
            // Daftar teks yang akan ditampilkan bergantian
            const texts = ["Pemesanan Tiket Bioskop", "Halo Selamat Datang"];
            let textIndex = 0;
            const typingText = document.querySelector('.typing-text');
            const welcomeText = document.querySelector('.welcome-text');

            function typeText() {
                if (textIndex < texts.length) {
                    typingText.textContent = texts[textIndex];
                    textIndex++;
                } else {
                    textIndex = 0;
                }

                setTimeout(typeText, 4000); // Ganti teks setiap 2 detik
            }

            // Panggil fungsi untuk memulai animasi mengetik
            typeText();
        </script>

        <?php
        if (isset($_POST['submit'])) {
            // Daftar film beserta usia minimum dan harga tiket
            $daftar_film = [
                "Avengers: Endgame" => ["usia_minimum" => 13, "harga" => 45000],
                "Spider-Man: No Way Home" => ["usia_minimum" => 10, "harga" => 40000],
                "The Conjuring: The Devil Made Me Do It" => ["usia_minimum" => 16, "harga" => 35000],
                "Shang-Chi and the Legend of the Ten Rings" => ["usia_minimum" => 12, "harga" => 30000],
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

                // Ubah format harga tiket menjadi format rupiah
                $formatted_harga_tiket = number_format($harga_tiket, 0, ',', '.');

                // Periksa apakah usia pengunjung memenuhi persyaratan usia minimum
                if ($usia_pengunjung < $usia_minimum) {
                    echo "<p>Maaf, Anda tidak memenuhi usia minimum untuk menonton $judul_film.</p>";
                } else {
                    echo "<p>Pesanan tiket diterima. Selamat menonton $judul_film!</p>";
                    // Tampilkan teks pembayaran seperti struck
                    echo "<pre>";
                    echo "=============================\n";
                    echo "          CINEPOLIS      \n";
                    echo "=============================\n";
                    echo "Judul Film: $judul_film\n";
                    echo "Usia Minimum: $usia_minimum\n";
                    echo "Harga Tiket: Rp $formatted_harga_tiket\n";
                    echo "=============================\n";
                    echo "</pre>";
                }
            } else {
                echo "<p>Judul film yang Anda pilih tidak tersedia.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
