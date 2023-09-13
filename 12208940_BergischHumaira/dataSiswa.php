<?php
$data_siswa = [
    ['nis' => '12208940', 'nama' => 'Bergisch Humaira', 'rombel' => 'PPLG XI-3', 'umur' => 17],
    ['nis' => '12201209', 'nama' => 'Jeon Koo', 'rombel' => 'PPLG XI-3', 'umur' => 18],
    ['nis' => '12200728', 'nama' => 'Athaya Margantara', 'rombel' => 'PPLG X-7', 'umur' => 15],
    ['nis' => '12209820', 'nama' => 'Narendra Salim', 'rombel' => 'TJKT X-9', 'umur' => 16],
    ['nis' => '12207802', 'nama' => 'Ailee yoonki', 'rombel' => 'DKV X-4', 'umur' => 20],
];

function cariSiswaUsia($data, $usiaMin) {
    $hasilPencarian = [];
    foreach ($data as $siswa) {
        if ($siswa['umur'] >= $usiaMin) {
            $hasilPencarian[] = $siswa;
        }
    }
    return $hasilPencarian;
}

function cariSiswaNama($data, $namaCari) {
    $hasilPencarian = [];
    foreach ($data as $siswa) {
        if (strpos(strtolower($siswa['nama']), strtolower($namaCari)) !== false) {
            $hasilPencarian[] = $siswa;
        }
    }
    return $hasilPencarian;
}

if (isset($_POST['button1'])) {
    $usiaMin = 17;
    $hasilPencarian = cariSiswaUsia($data_siswa, $usiaMin);
} elseif (isset($_POST['button2'])) {
    $namaCari = $_POST['nama'];
    $hasilPencarian = cariSiswaNama($data_siswa, $namaCari);
}
?>

<form method="post" action="">
    <input type="submit" name="button1" value="Cari siswa usia >= 17">
    <input type="text" name="nama" placeholder="Nama Siswa">
    <input type="submit" name="button2" value="Cari Nama">
</form>

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