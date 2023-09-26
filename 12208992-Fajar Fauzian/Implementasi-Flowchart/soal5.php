<?php
$jam;
$menit;
$detik;
$jam2;
$menit2;
$hasil;
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
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

     input[type="text"],
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
     <form action="" method="post">
          <div class="one" style="display: flex;">
               <label for="jam">Masukkan jam
               </label>
               <input type="number" name="jam" id="jam">
          </div>

          <div class="two" style="display: flex;">
               <label for="menit">Masukkan menit
               </label>
               <input type="number" name="menit" id="menit">
          </div>

          <div class="three" style="display: flex;">
               <label for="detik">Masukkan detik
               </label>
               <input type="number" name="detik" id="detik">
          </div>

          <button type="submit" name="submit">Kirim</button>
     </form>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam2 = $jam *3600;
        $menit2 = $menit *60;
        $hasil = $jam2 + $menit2 + $detik;
        echo $hasil . " detik";
    }
?>