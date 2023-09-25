<?php
$siswa = [
    [
        "nama" => "Kevin Ilpallazo",
        "nis" => "12209078",
        "rombel" => "PPLG XI-3",
        "rayon" => "Cis 6",
        "umur" => 17,
    ],
    [
        "nama" => "Ujang Supremacy",
        "nis" => "12209999",
        "rombel" => "PPLG XI-3",
        "rayon" => "Cisarua 6",
        "umur" => 16,
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Siswa</h2>

        <form method="post" class="search-form">
            <div class="form-group">
                <label for="nama_cari">Cari berdasarkan nama</label>
                <input type="text" name="nama_cari" id="nama_cari" class="form-control form-control-sm" placeholder="Masukkan nama" required>
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        <form method="post">
            <button type="submit" name="tampilkan_semua" class="btn btn-success mt-2">TAMPILKAN SEMUA DATA SISWA 17 TAHUN</button>
        </form>

        <?php
        if (isset($_POST['nama_cari'])) {
            $nama_cari = $_POST['nama_cari'];
            $found = false;

            foreach ($siswa as $data) {
                if (strpos($data['nama'], $nama_cari) === 0) {
                    echo '<h2>Data Siswa</h2>';
                    echo '<table class="discord-table">
                            <tr>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Rombel</th>
                                <th>Rayon</th>
                                <th>Umur</th>
                            </tr>
                            <tr>
                                <td>' . $data['nama'] . '</td>
                                <td>' . $data['nis'] . '</td>
                                <td>' . $data['rombel'] . '</td>
                                <td>' . $data['rayon'] . '</td>
                                <td>' . $data['umur'] . '</td>
                            </tr>
                          </table>';
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                echo '<div class="result-message">Data tidak ada.</div>';
            }
        }

        if (isset($_POST['tampilkan_semua'])) {
            echo '<h2>Siswa 17 Tahun atau Lebih Tua</h2>';
            echo '<table class="discord-table">
                    <tr>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Rombel</th>
                        <th>Rayon</th>
                        <th>Umur</th>
                    </tr>';

            foreach ($siswa as $data) {
                if ($data['umur'] >= 17) {
                    echo '<tr>
                            <td>' . $data['nama'] . '</td>
                            <td>' . $data['nis'] . '</td>
                            <td>' . $data['rombel'] . '</td>
                            <td>' . $data['rayon'] . '</td>
                            <td>' . $data['umur'] . '</td>
                          </tr>';
                }
            }

            echo '</table>';
        }
        ?>

        <h2>Siswa</h2>
        <table class="discord-table">
            <tr>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
            <?php
            foreach ($siswa as $data) {
                echo '<tr>
                        <td>' . $data['nama'] . '</td>
                        <td>' . $data['umur'] . '</td>
                      </tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>
