<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu ke Detik</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 300px;
            height: 300px;
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a box shadow */
        }

        form {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h2 style="text-align: center;">Konversi Waktu ke Detik</h2>
            <table>
                <tr>
                    <td>Jam :</td>
                    <td><input type="number" name="jam" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <tr>
                    <td>Menit :</td>
                    <td><input type="number" name="menit" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <tr>
                    <td>Detik :</td>
                    <td><input type="number" name="detik" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input style="width: 100%;" type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

<?php
if (isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

    $total_detik = ($jam * 3600) + ($menit * 60) + $detik;

    echo "Total detik: $total_detik detik";
}
?>
    </div>
</body>

</html>
