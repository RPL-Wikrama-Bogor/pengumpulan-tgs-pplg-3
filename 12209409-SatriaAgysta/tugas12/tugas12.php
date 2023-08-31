<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Penghitungan Waktu</title>
</head>
<body>
    <div class="container">
        <form method="post" action="result.php">
        <h1>Masukan Waktu :</h1>
            <label for="jam">Jam:</label>
            <input type="number" id="jam" name="jam" min="0" max="23" placeholder="maksimal 23" required><br>
            <label for="menit">Menit:</label>
            <input type="number" id="menit" name="menit" min="0" max="59" placeholder="maksimal 59" required><br>
            <label for="detik">Detik:</label>
            <input type="number" id="detik" name="detik" min="0" max="59" placeholder="maksimal 59" required><br><br>
            <p class="pe"><span style="color: blueice;">*Angka yang diinput harus sesuai agar program dapat dijalankan.</span></p>
            <button type="submit">Hitung</button>
        </form>
    </div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0; z-index: -1; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
<path fill="#39bdb9" fill-opacity="1" d="M0,160L34.3,181.3C68.6,203,137,245,206,256C274.3,267,343,245,411,250.7C480,256,549,288,617,272C685.7,256,754,192,823,170.7C891.4,149,960,171,1029,160C1097.1,149,1166,107,1234,96C1302.9,85,1371,107,1406,117.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path
    </svg>

</body>
</html>
