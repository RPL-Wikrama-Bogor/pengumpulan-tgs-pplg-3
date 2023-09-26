<?php
$data_siswa = [
    ['nis' => '12209035', 'nama' => 'Hana Nadira Savaira', 'rombel' => 'PPLG XI-3', 'umur' => 17],
    ['nis' => '12200208', 'nama' => 'Mahendra Ardantara', 'rombel' => 'PPLG XI-3', 'umur' => 18],
    ['nis' => '12200606', 'nama' => 'Haikal Dirgantara', 'rombel' => 'PPLG X-6', 'umur' => 16],
    ['nis' => '12201308', 'nama' => 'Jeman Agustian', 'rombel' => 'PPLG X-6', 'umur' => 15],
    ['nis' => '12200208', 'nama' => 'Lee Min Hyung', 'rombel' => 'PPLG X-1', 'umur' => 18],
    ['nis' => '12209560', 'nama' => 'Fania nirmala', 'rombel' => 'PPLG X-1', 'umur' => 19],
    ['nis' => '12209560', 'nama' => 'Lee Dong-hyuck', 'rombel' => 'PPLG X-2', 'umur' => 14],
    ['nis' => '12209560', 'nama' => 'Nadira Putri Aksara', 'rombel' => 'PPLG X-2', 'umur' => 17],
];
function cariSiswaUsia($data, $usia_minimal) {
    $hasil_pen = [];
    foreach ($data as $siswa) {
        if ($siswa['umur'] >= $usia_minimal) {
            $hasil_pen[] = $siswa;
        }
    }
    return $hasil_pen;
}

function cariSiswaNama($data, $cari_nama) {
    $hasil_pen = [];
    foreach ($data as $siswa) {
        if (strpos(strtolower($siswa['nama']), strtolower($cari_nama)) !== false) {
            $hasil_pen[] = $siswa;
        }
    }
    return $hasil_pen;
}

if (isset($_POST['button1'])) {
    $usia_minimal = 17;
    $hasil_pen = cariSiswaUsia($data_siswa, $usia_minimal);
} elseif (isset($_POST['button2'])) {
    $cari_nama = $_POST['nama'];
    $hasil_pen = cariSiswaNama($data_siswa, $cari_nama);
}
?>

<form method="post" action="">
    <input type="submit" name="button1" value="Cari siswa usia >= 17">
    <input type="text" name="nama" placeholder="Nama Siswa">
    <input type="submit" name="button2" value="Cari Nama">
</form>

<?php
if (isset($hasil_pen)) {
    if (empty($hasil_pen)) {
        echo "Tidak ada hasil yang ditemukan.";
    } else {
        echo "<h2>Hasil Pencarian:</h2>";
        foreach ($hasil_pen as $siswa) {
            echo "NIS: " . $siswa['nis'] . "<br>";
            echo "Nama: " . $siswa['nama'] . "<br>";
            echo "Rombel: " . $siswa['rombel'] . "<br>";
            echo "Umur: " . $siswa['umur'] . "<br><br>";
        }
    }
}
?>