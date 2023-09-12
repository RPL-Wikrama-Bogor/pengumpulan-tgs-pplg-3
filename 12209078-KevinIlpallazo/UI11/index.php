<!DOCTYPE html>
<html>
<head>
    <title>Cetak Informasi Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="header">
        <h1><span class="blue-letter">W</span>AYNE <span class="blue-letter">E</span>NTERPRISE</h1>
    </div>
    <div class="form-container">
        <form method="post">
       <h1> <label>Nomor karyawan</label> </h1> <br>
            <input type="number" name="nomor_pegawai" placeholder="eg. 10204200704" id="nomor_pegawai" required>
            <div class="form-group">
                <input type="submit" value="Cetak Informasi" class="btn btn-primary">
            </div>
        </form>

        <section class="output">
        <?php
// Fungsi untuk mengubah angka bulan menjadi nama bulan
function angkaKeNamaBulan($bulan) {
    $namaBulan = [
        1 => "Januari",
        2 => "Februari",
        3 => "Maret",
        4 => "April",
        5 => "Mei",
        6 => "Juni",
        7 => "Juli",
        8 => "Agustus",
        9 => "September",
        10 => "Oktober",
        11 => "November",
        12 => "Desember"
    ];

    return $namaBulan[$bulan];
}

// Fungsi untuk mencetak informasi pegawai
function cetakInformasiPegawai($pegawai) {
    $golongan = substr($pegawai, 0, 1);
    $dd = substr($pegawai, 1, 2);
    $mm = substr($pegawai, 3, 2);
    $yyyy = substr($pegawai, 5, 4);
    $nn = substr($pegawai, 9);

    $namaBulan = angkaKeNamaBulan(intval($mm));

    echo "<h4>Nomor Golongan: " . $golongan . "</h4>";
    echo "<h4>Tanggal Lahir: " . $dd . " " . $namaBulan . " " . $yyyy . "</h4>";
    echo "<h4>Nomor Urut: " . $nn . "</h4>";
}

// Periksa apakah data telah dikirim melalui formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomorPegawai = $_POST["nomor_pegawai"];

    if (strlen($nomorPegawai) != 11) {
        echo "<h4 class='error-message'>Nomor tidak valid, silahkan input ulang</h4>";
    } else {
        cetakInformasiPegawai($nomorPegawai);
    }
}
?>
            
        </section>
    </div>
</body>
</html>
