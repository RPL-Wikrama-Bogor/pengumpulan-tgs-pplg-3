<?php
// Data siswa dalam bentuk array asosiatif
$data_siswa = [
    ['nis' => '12209304', 'nama' => 'Naura Siti Nabilah', 'rombel' => 'PPLG XI-3', 'umur' => 17],
    ['nis' => '12209456', 'nama' => 'Muhammad Yusuf', 'rombel' => 'PPLG XI-3', 'umur' => 18],
    ['nis' => '12209390', 'nama' => 'Farhan Wibowo', 'rombel' => 'PPLG X-6', 'umur' => 15],
    ['nis' => '12209560', 'nama' => 'Faruq Abdurrahman', 'rombel' => 'PPLG X-6', 'umur' => 16],
    // Tambahkan data siswa lainnya di sini
];

// Fungsi untuk mencari siswa berdasarkan usia (button 1)
function cariSiswaUsia($data, $usiaMin) {
    $hasilPencarian = [];
    foreach ($data as $siswa) {
        if ($siswa['umur'] >= $usiaMin) {
            $hasilPencarian[] = $siswa;
        }
    }
    return $hasilPencarian;
}

// Fungsi untuk mencari siswa berdasarkan nama (button 2)
function cariSiswaNama($data, $namaCari) {
    $hasilPencarian = [];
    foreach ($data as $siswa) {
        if (strpos(strtolower($siswa['nama']), strtolower($namaCari)) !== false) {
            $hasilPencarian[] = $siswa;
        }
    }
    return $hasilPencarian;
}

// Memproses permintaan berdasarkan tombol yang diklik
if (isset($_POST['button1'])) {
    $usiaMin = 17;
    $hasilPencarian = cariSiswaUsia($data_siswa, $usiaMin);
} elseif (isset($_POST['button2'])) {
    $namaCari = $_POST['nama'];
    $hasilPencarian = cariSiswaNama($data_siswa, $namaCari);
}
?>

<!-- Form HTML untuk mengirim permintaan pencarian -->
<form method="post" action="">
    <input type="submit" name="button1" value="Cari siswa usia >= 17">
    <input type="text" name="nama" placeholder="Nama Siswa">
    <input type="submit" name="button2" value="Cari Nama">
</form>

<!-- Menampilkan hasil pencarian -->
<?php
if (isset($hasilPencarian)) {
    if (empty($hasilPencarian)) {
        echo "Tidak ada hasil yang ditemukan.";
    } else {
        echo "<h2>Hasil Pencarian:</h2>";
        foreach ($hasilPencarian as $siswa) {
            echo "NIS: " . $siswa['nis'] . "<br>";
            echo "Nama: " . $siswa['nama'] . "<br>";
            echo "Rombel: " . $siswa['rombel'] . "<br>";
            echo "Umur: " . $siswa['umur'] . "<br><br>";
        }
    }
}
?>
