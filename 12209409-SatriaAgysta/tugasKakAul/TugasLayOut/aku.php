<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakamoto Days</title>
    <link rel="stylesheet" href="style.css"> <!-- Gantilah "styles.css" dengan nama file CSS Anda -->
</head>
<body>

<nav class="navbar">
        <a class="logo" href="#">MangaFoo</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#">Information</a></li>
            </ul>
    </nav>

<div class="header">
    <img src="sakamoto.jpg" alt="">
    <div class="overlay-text">
            <h1>Sakamoto Days</h1>
            <a class="button" href="https://komiku.id/manga/sakamoto-days/" target="blank">Read Manga Here!!!</a>
        </div>
</div>

<h1 style="font-size: 45px; text-align: center; padding-bottom: 0;">About</h1>

<div class="container">
    <div class="text">
        <h1>Sakamoto Days</h1>
        <p>Sakamoto Days adalah serial manga Jepang karangan Yuto Suzuki, serial ini pertama kali rilis di majalah Shōnen Jump Giga pada 26         
            Desember 2019, kemudian serial ini mulai mendapatkan serialisasi mingguan pada 21 November 2020 di majalah Weekly Shōnen Jump, dan 
            hingga artikel ini ditulis serial ini telah rilis hingga chapter 132 (manga akan lanjut seterusnya). Sakamoto Days dapat dibaca secara legal dalam bahasa Inggris pada 
            website Viz dan Aplikasi Manga Plus, serial ini memiliki genre; Action, Comedy.</p>
    </div>
    <div class="image">
        <img src="sk.jpg" alt="">
    </div>
</div>

<h1 style="font-size: 45px; text-align: center; padding-bottom: 0;">Top 4 Character</h1>

<div class="card-grid">
        <div class="card">
            <img src="1.jpeg" alt="Gambar 1">
            <h2>Mafuyu</h2>
            <p>Deskripsi card 1.</p>
        </div>
        <div class="card">
            <img src="2.jpeg" alt="Gambar 1">
            <h2>Shin</h2>
            <p>Deskripsi card 1.</p>
        </div>
        <div class="card">
            <img src="3.jpeg" alt="Gambar 1">
            <h2>Akira</h2>
            <p>Deskripsi card 1.</p>
        </div>
        <div class="card">
            <img src="4.jpeg" alt="Gambar 1">
            <h2>Sakamoto</h2>
            <p>Deskripsi card 1.</p>
        </div>
</div>

<div class="hal">
    <div class="content">
        <form method="post" action="result.php">
        <h1>Laporan Mengenai Manga :</h1>
            <label for="jam">Name : </label>
            <input type="text" id="jam" name="jam" min="0" max="23" placeholder="maksimal 23" required><br>
            <label for="menit">Email :</label>
            <input type="mail" id="menit" name="menit" min="0" max="59" placeholder="maksimal 59" required><br>
            <label for="detik">No Telp :</label>
            <input type="number" id="detik" name="detik" min="0" max="59" placeholder="maksimal 59" required><br>
            <label for="detik">Saran :</label>
            <input  style="height: 70px;" type="textarea" id="detik" name="detik" min="0" max="59" placeholder="maksimal 59" required><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="hasil">
    <h1>Hasil Laporan</h1>
        <div class="context">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ullam magni. Ducimus facilis quam voluptas amet. Mollitia porro, minima id quaerat, iusto aperiam facilis maxime adipisci dolores dolore eveniet itaque.</p>
        </div>
        <div class="image1">
            <img src="sk.jpg" alt="">
        </div>
</div>
</div>

</body>
</html>
