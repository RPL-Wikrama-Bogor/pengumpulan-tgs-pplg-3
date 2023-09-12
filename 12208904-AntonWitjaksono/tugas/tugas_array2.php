<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="tugas_array2.css">
    <title>Array</title>
</head>
<body>

    <?php
    $listFilm = [
        [
            "judul" => "Miracle in Cell No. 7",
            "min-usia" => 15,
            "harga" => 45,000
        ],
        [
            "judul" => "Fast X",
            "min-usia" => "13",
            "harga" => 45,000
        ]
    ];

    ?>

    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="number" name="usia"></td>
                </tr>
                <tr>
                    <td>Film</td>
                    <td>
                        <select name="judul">
                            <option hidden>--pilih film--</option>
                            <?php
                            foreach ($listFilm as $key => $film) {
                            ?>
                                <option value="<?= $key ?>"><?= $film['judul'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    if (isset($_POST['simpan'])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];
        $nama = $_POST['nama'];

        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if ($usia > $minUsia) {
            echo "<h2 style='color: green'>Hai $nama silahkan untuk membayar sebesar Rp. " . number_format($harga, 3, ',', '.') . "</h2>";
        } else {
            echo "<h2 style='color: red'>Hai $nama kamu belum cukup umur untuk menonton film ini </h2>";
        }
    }
    ?>

</body>

</html>