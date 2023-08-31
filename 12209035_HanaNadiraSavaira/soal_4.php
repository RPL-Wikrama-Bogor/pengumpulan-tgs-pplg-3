<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji Bersih</title>
</head>
<body>
    <h2>Form Menghitung Gaji Bersih</h2>
    <form action="" method="post">
        <div style="display: flex; margin-bottom: 15px;">
            <label for="nama">Masukkan nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div style="display: flex; margin-bottom: 15px;">
            <label for="gaji_pokok">Masukkan gaji pokok</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>  
    <?php 
    $tunj;
    $pajak;
    $g_bersih;
    $gaji_pokok;
    $nama;

    if (isset($_POST['submit'])) {
        // Proses pengisian input ke variabel
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj = 20 * $gaji_pokok / 100;
        $pajak = 15 * ($gaji_pokok + $tunj) / 100;
        $g_bersih = $gaji_pokok + $tunj - $pajak;

        echo "Nama: " . $nama . "<br>";
        echo "Tunjangan : " . number_format($tunj) . "<br>";
        echo "Pajak: " . number_format($pajak) . "<br>";
        echo "Gaji bersih: " . number_format($g_bersih) . "<br>";
    }
    ?>
</body>
</html>