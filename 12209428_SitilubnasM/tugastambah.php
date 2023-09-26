<?php
// Data siswa dalam bentuk array asosiatif
$data_siswa = [
    ['nis' => '12209428', 'nama' => 'Siti Lubna Salsabila Muslimah', 'rombel' => 'PPLG XI-3', 'umur' => 17],
    ['nis' => '12200208', 'nama' => 'Mahendra Ardinata', 'rombel' => 'PPLG XI-3', 'umur' => 18],
    ['nis' => '12200606', 'nama' => 'Alvino Algara', 'rombel' => 'PPLG X-6', 'umur' => 16],
    ['nis' => '12201308', 'nama' => 'Jeman Agustian', 'rombel' => 'PPLG X-6', 'umur' => 15],
    ['nis' => '12209560', 'nama' => 'Rahmawati Dewilia ', 'rombel' => 'PPLG X-3', 'umur' => 18],
    ['nis' => '12209560', 'nama' => 'Salwa Widfa Utami', 'rombel' => 'PPLG X-1', 'umur' => 19],
    ['nis' => '12209560', 'nama' => 'Rembun Angreani Putri', 'rombel' => 'PPLG X-2', 'umur' => 14],
    ['nis' => '12209560', 'nama' => 'Nadira Putri Aksara', 'rombel' => 'PPLG X-2', 'umur' => 17],
];

if (isset($_POST['button1'])) {
    $usiaMin = 17;
    $hasilCari = cariUsia($data_siswa, $usiaMin);
} elseif (isset($_POST['button2'])) {
    $cariNama = $_POST['nama'];
    $hasilCari = cariSiswaNama($data_siswa, $cariNama);
}
//fungsi untuk mencari siswa yang usia nya >=17
function cariUsia($data, $usiaMin) {
    $hasilCari = [];
    foreach ($data as $siswa) {
        if ($siswa['umur'] >= $usiaMin) {
            $hasilCari[] = $siswa;
        }
    }
    return $hasilCari;
}

// fungsi untuk mencari lewat nama
function cariSiswaNama($data, $cariNama) {
    $hasilCari = [];
    foreach ($data as $siswa) {
        if (strpos(strtolower($siswa['nama']), strtolower($cariNama)) !== false) {
            $hasilCari[] = $siswa;
        }
    }
    return $hasilCari;
}

?>  
<h1><b>Kumpulan data siswa</b></h1>
<form method="post" action="">
    <input type="submit" name="button1" value="Cari siswa usia >= 17">
    <input type="text" name="nama" placeholder="Nama siswa">
    <input type="submit" name="button2" value="Cari Nama">
</form>
<?php
if (isset($hasilCari)) {
    if (empty($hasilCari)) {
        echo "Tidak ada hasil yang ditemukan.";
    } else {
        echo "<h2>Hasil Pencarian:</h2>";
        foreach ($hasilCari as $siswa) {
            echo "NIS: " . $siswa['nis'] . "<br>";
            echo "Nama: " . $siswa['nama'] . "<br>";
            echo "Rombel: " . $siswa['rombel'] . "<br>";
            echo "Umur: " . $siswa['umur'] . "<br><br>";
        }
    }
}
?>