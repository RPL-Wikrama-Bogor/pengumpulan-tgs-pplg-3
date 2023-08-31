<?php 
$jam;
$menit;
$detik;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #E4E4D0;
        }
        .content {
            display: flex;
            text-align: center;
            margin-left: 10%;
        }
        label {
            font-size: 17px;
        }
        input {
            width: 35%;
            height: 30px;
            border-radius: 60px;
            text-align: center;
        }
        button {
            margin-top: 20px;
            width: 25%;
            height: 35px;
            background-color: #E4E4D0;
            border: none;
        }
        .card {
            margin-top: 130px;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,0.2);
            padding: 15px 16px;
            width: 400px;
            border-radius: 15px;
            background-color: #fff;
            background-image: url(pic1.jpg);
        }
        .hasil {
            margin-top: 130px;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,0.2);
            background-image: url(pic2.jpg);
            width: 400px;
            border-radius: 15px;
            margin-left: 80px;
            font-size: 25px;
            padding: 80px 20px;
        }
        /* @media (min-width: 576px) { 
            input {
                width: 55%;
            }
            button {
                width: 50%;
            }
            .card {
                width: 600px;
                margin-left: -40px;
            }
            .hasil {
                width: 600px;
                margin-left: 10px;
            }
         
        } */


    </style>
</head>
<body>
    <h1><center>Penambahan waktu 1 detik</center></h1>
    <div class="content">
        <div class="card">
            <center>
    <form action="" method="post">
        <label for="hour">Input jam</label><br>
        <input type="number" name="jam" id="hour"><br>
        <label for="minute">Input Menit</label><br>
        <input type="number" name="menit" id="minute"><br>
        <label for="second">Input Detik</label><br>
        <input type="number" name="detik" id="second"><br>

        <button type="submit" name="submit">Kirim</button>
    </form>
    </div>
    <?php
if (isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

    $detik = $detik + 1;

    if($detik >= 60){
        $menit = $menit + 1;
        $detik = 00;
    }

    if($menit >= 60){
        $jam = $jam + 1;
        $menit = 0;
        $detik = 0;
    }

    if($jam >= 24){
        $jam = 00;
        $menit = 00;
        $detik = 00;
    }
?>
    <div class="hasil">
        <?php echo "Waktu telah ditambahkan 1 detik <br> " . $jam.":". $menit.":". $detik ?>
    </div>
</center>
</div>
<?php
        }
    ?>
</body>
</html>