<?php

session_start();

    if ( isset($_POST["submit"])) {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
        body{
            background-image: url("<?=$_SESSION['img']?>");
            background-size: cover;
            font-family: "Poppins", sans-serif;
        }

        h1,p {
          text-align: center;
          margin-bottom: 20px;
          color: black;
        }

        .container{
            display: grid;
            place-items: center;
        }

        .card{
            background-color: rgba( 255, 255, 255, 0.7);
            box-shadow: 0 15px 15px rgba( 0, 0, 0, 0.4);
            width: 50%;
            height: auto;
            border-radius: 50px;
            text-align: center;
        }

        .button-area {
          text-align: center;
        }
     
        .button-area button {
            color: black;
            border: none;
            outline: none;
            font-size: 1.3rem;
            cursor: pointer;
            border-radius: 1rem;
            padding: 10px 50px;
            background: aqua;
            box-shadow: 0px 5px 10px aquamarine;
            transition: 0.3s ease;
            font-family: "Poppins", sans-serif;
            margin-top: 1rem;
        }

        .button-area button:hover {
            background: aquamarine;
        }
    </style>
</head>
<body>

     <div class="container">
        <div class="card">
            <h1>pembayaran selesai</h1>
            <p>nama : <?= $_SESSION["nama"];?></p>
            <p>nama film : <?= $_SESSION["film"];?></p>
            <p>harga film : <?= $_SESSION["harga"];?></p>
            <p>terimakasih telah memesan tiket di web ini</p>
            <p>semoga anda nyaman bertransaksi di web ini</p>
            <p>terimakasih</p>
            <form action="" method="post">
                <div class="button-area">
                    <button type="submit" name="submit">Kembali</button>
                </div><br>
            </form>
         </div>
    </div>
</body>
</html>