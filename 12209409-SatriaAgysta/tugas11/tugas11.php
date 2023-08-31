<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>
    <div class="container">
        <form method="POST" action="result.php"> <!-- Specify the action attribute -->
            <h1>Masukan Kode Pegawai :</h1>
            <label for="kode_pegawai">Kode Pegawai:</label><br>
            <input type="number" id="kode_pegawai" name="kode_pegawai" placeholder="hanya angka" required><br><br><br>
            <p class="pe"><span style="color: blueice;">*Kode Pegawai harus memiliki 11 karakter.</span></p>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0; z-index: -1; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
    <path fill="#3979bd" fill-opacity="1" d="M0,96L34.3,112C68.6,128,137,160,206,186.7C274.3,213,343,235,411,224C480,213,549,171,617,170.7C685.7,171,754,213,823,218.7C891.4,224,960,192,1029,160C1097.1,128,1166,96,1234,85.3C1302.9,75,1371,85,1406,90.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</body>

</html>
