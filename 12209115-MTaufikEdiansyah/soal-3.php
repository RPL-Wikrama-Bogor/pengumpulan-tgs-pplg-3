
<?php

$bil_satu;
$bil_dua;
$bil_tiga;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Angka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        input[type="number"] {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perbandingan Angka</h2>
        <form action="" method="post">
            <label for="angka_pertama">Masukkan Angka Pertama:</label>
            <input type="number" name="angka_pertama" id="angka_pertama">
            
            <label for="angka_kedua">Masukkan Angka Kedua:</label>
            <input type="number" name="angka_kedua" id="angka_kedua">
            
            <label for="angka_ketiga">Masukkan Angka Ketiga:</label>
            <input type="number" name="angka_ketiga" id="angka_ketiga">
            
            <button type="submit" name="submit">Kirim</button>
        </form>
        <div class="result">
        <?php

            if(isset($_POST['submit'])){

                // $post disamakan dengan atribut name
                $bil_satu=$_POST['angka_pertama'];
                $bil_dua=$_POST['angka_kedua'];
                $bil_tiga=$_POST['angka_ketiga'];
                //decision
                if($bil_satu >= $bil_dua  && $bil_satu >= $bil_tiga){
                    echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
                    "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_satu."</b>";
                    
                }
                else if($bil_dua >= $bil_satu && $bil_dua >= $bil_tiga){
                    echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
                    "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_dua."</b>";

                }
                else if($bil_tiga >= $bil_satu && $bil_tiga >= $bil_dua){
                    echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
                    "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_tiga."</b>";

                }
                else{
                    echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
                    "||Bilangan Ketiga : ".$bil_tiga."<b>BILANGAN SAMA BESAR</b>";

                }
                
            }

        ?>
        </div>
    </div>
</body>
</html>
