<?php
    $hh = 00;
    $mm = 00;
    $ss = 00;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tgs12.css">
    <title>Data waktu setelah ditambahkan 1 detik</title>
</head>
<body>
<form action="" method="post">
    <div class="wrapper">
        <div class="text">
            <center><h1 style="color: salmon;">data waktu ditambah 1 detik</h1></center>
        </div>

        <br>

        <div class="input-data">
            <input type="number" name="hh" required>
            <div class="underline">
            </div>
            <label>Jam</label>
        </div>

        <br>

        <div class="input-data">
            <input type="number" name="mm" required>
            <div class="underline">
            </div>
            <label>Menit</label>
        </div>

        <br>

        <div class="input-data">
            <input type="number" name="ss" required>
            <div class="underline">
            </div>
            <label>Detik</label>
        </div><br>

        <button class="my-button" type="submit" value="Submit" name="submit">Hitung</button>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $hh = (int) $_POST['hh'];
            $mm = (int)$_POST['mm'];
            $ss = (int) $_POST['ss'];

            //proses
            $ss = $ss + 1;

            //output
            if ($ss >= 60){
                $mm = $mm + 1;
                $ss = 00;

            if ($mm >=60){
                $hh = $hh + 1;
                $mm = 00;
                $ss = 00;

            if ($hh >=24){
                $hh = 00;
                $mm = 00;
                $ss = 00;
            }
        }          
    }
        else {
            $ss = $ss;
        }
            echo $hh . ":";
            echo $mm . ":";
            echo $ss . "";
    }
?>
</label>
</div>
</body>
</html>