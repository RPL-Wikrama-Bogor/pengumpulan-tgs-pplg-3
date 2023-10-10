    <?php
    $film = [
        [
            "judul" => "pengabdi setan",
            "min-usia" => 15,
            "harga" => 45000
        ],
        [
            "judul" => "dilan 1990",
            "min-usia" => 13,
            "harga" => 30000
        ],
        [
            "judul" => "keluarga cemara",
            "min-usia" => 9,
            "harga" => 25000
        ],
        [
            "judul" => "kkn di desa penari",
            "min-usia" => 12,
            "harga" => 20000
        ]
    ];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemesanan Tiket dan Kasir</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin: 20px;
            }

            h1 {
                color: #333;
            }

            form {
                background-color: #007bff;
                color: #fff;
                display: inline-block;
                text-align: left;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 350px;
                width: 100%;
            }

            label, select, input {
                margin-bottom: 10px;
                display: block;
                width: 98%;
                font-size: 20px;
            }

            input[type="number"], select {
                padding: 7px;
                font-size: 16px;
            }

            input[type="submit"] {
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                border-radius: 10px;
                font-size: 15px;
                width: 100%;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            .result {
                margin-top: 20px;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                text-align: center;
                max-width: 350px;
                width: 100%;
                background-color: #fff;
                color: #333;
            }

            .result.success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
                margin:20px auto;
            }

            .result.error {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
                margin: 20px auto;
            }
        </style>
    </head>
    <body>
        <h1>Pemesanan Tiket</h1>
        <form action="" method="post">

        <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia" required>

            <label for="judul_film">Judul Film:</label>
            <select name="judul_film" id="judul_film" required>
                <?php
                    foreach($film as $data) {
                        echo "<option value='{$data['judul']}'>{$data['judul']}</option>";
                    }
                ?>
            </select>

            <input type="submit" name="submit" value="Pesan tiket">
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $usia = $_POST["usia"];
                $judul_film = $_POST["judul_film"];

                foreach($film as $data) {
                    if ($data['judul'] == $judul_film) {
                        if ($usia >= $data['min-usia']) {
                            echo "<div class='result success'>Anda dapat membeli tiket seharga " . $data['harga'] . " Rupiah.</div>";
                        } else {
                            echo "<div class='result error'>Maaf, Anda tidak dapat menonton film ini karena usia Anda kurang dari " . $data['min-usia'] . " tahun.</div>";
                        }
                        break;
                    }
                }
            }
        ?>
    </body>
    </html>
