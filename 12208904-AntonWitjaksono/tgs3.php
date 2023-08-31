<?php
    $A;
    $B;
    $C;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari bilangan terbesar</title>
</head>
<body>
    <h1>Mencari bilangan terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td></td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td></td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td></td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $A = $_POST['bil_satu'];
            $B = $_POST['bil_dua'];
            $C = $_POST['bil_tiga'];

            //proses
            if ($A > $B && $A > $C){
                echo $A . " Bilangan Terbesar";
            }

            else if ($B > $A && $B > $C){
                echo $B . " Bilangan Terbesar";
            }

            else if ($C > $A && $C > $B){
                echo $C . " Bilangan Terbesar";
            }
 
            else if ($A == $B && $A == $C){
                echo "Sama Besar";
            }
            else if ($A == $B){
                echo "Bilangan Pertama dan Bilangan Kedua Sama Besar, dan Bilangan Terbesar adalah ". $A;
            }
            else if ($B == $C){
                echo "Bilangan Kedua dan Bilangan Ketiga Sama Besar, dan Bilangan Terbesar adalah ". $B;
            }
            else if ($C == $A){
                echo "Bilangan Ketiga dan Bilangan Pertama Sama Besar, dan Bilangan Terbesar adalah ". $C;
            }
            else {
                echo "Sama Besar!";
            }
        }

    ?>

</body>
</html>