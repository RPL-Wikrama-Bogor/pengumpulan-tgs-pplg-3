<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Selection Form</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/free-vector/cinema-room-background_1017-8728.jpg?w=1380&t=st=1694574141~exp=1694574741~hmac=ca4745321fc18d7d945807e1774e7d392af8594f97a261179879813b102a650b');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        form {
            text-align: center;
        }

        h2 {
            color: green;
        }

        h2.error {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $listFilm = [
        [
            "judul" => "miracle in call no. 7",
            "min-usia" => 15,
            "harga" => 45000
        ],
        [
            "judul" => "the invitation",
            "min-usia" => 17,
            "harga" => 35000
        ],
        [
            "judul" => "luck",
            "min-usia" => 7,
            "harga" => 35000
        ]
    ]
    ?>
    <div class="card">
        <h1>Movie Selection</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Usia</td>
                    <td><input type="number" name="usia"></td>
                </tr>
                <tr>
                    <td>Film</td>
                    <td>
                        <select name="judul">
                            <option hidden disabled selected>--Pilih film--</option>
                            <?php
                            foreach ($listFilm as $key => $film) {
                                echo "<option value=\"$key\">{$film['judul']}</option>";
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
        <?php
        if (isset($_POST['simpan'])) {
            $usia = $_POST['usia'];
            $filmId = $_POST['judul'];
            $minUsia = $listFilm[$filmId]['min-usia'];
            $harga = $listFilm[$filmId]['harga'];

            if ($usia >= $minUsia) {
                echo "<h2>Silahkan untuk membayar sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
            } else {
                echo "<h2 class='error'>Usia belum cukup</h2>";
            }
        }
        ?>
    </div>
</body>

</html>
