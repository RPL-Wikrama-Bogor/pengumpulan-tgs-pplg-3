<!DOCTYPE html>
<html>

<head>
     <title>Pemesanan Tiket</title>
</head>
<style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
     @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

     body {
          font-family: "Poppins", sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 90vh;
          margin-top: 50px;

     }

     h2 {
          text-align: center;
          margin-top: 20px;
     }

     form {
          width: 400px;
          margin: 0 auto;
          padding: 20px;
          border: 1px solid #ccc;
          border-radius: 15px;
          border: 1px solid transparent;
          backdrop-filter: blur(1rem);
          box-shadow: 1.2rem 1.2rem 1.2rem rgba(0, 0, 0, 0.7);
          border-top-color: rgba(225, 225, 225, 0.1);
          border-left-color: rgba(225, 225, 225, 0.1);
          border-bottom-color: rgba(225, 225, 225, 0.1);
          border-right-color: rgba(225, 225, 225, 0.1);

     }

     table {
          width: 100%;
     }

     td {
          padding: 5px;
     }

     select,
     input[type="text"],
     input[type="number"],
     input[type="submit"] {
          width: 90%;
          padding: 9px;
          margin-top: 15px;
          border: 1px solid #ccc;
          border-radius: 15px;
     }

     input[type="submit"] {
          background-color: #007BFF;
          color: #fff;
          cursor: pointer;
          margin-bottom: 10px;
     }
</style>

<body>
     <?php
     $listFilm = [
          [
               "judul" => "Miracle In Cell No. 7",
               "min-usia" => 15,
               "harga" => 45000
          ],
          [
               "judul" => "The Invitation",
               "min-usia" => 17,
               "harga" => 35000
          ],
          [
               "judul" => "Luck",
               "min-usia" => 7,
               "harga" => 35000
          ]
     ];


     ?>
     <center>
          <form action="" method="post">
               <table>
                    <h1>Daftar Film Bioskop</h1>
                    <tr>
                         <td>Nama : </td>
                         <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                         <td>Usia : </td>
                         <td><input type="number" name="usia"></td>
                    </tr>
                    <tr>
                         <td>Film : </td>
                         <td>
                              <select name="judul">
                                   <option hidden>Pilih Film</option>
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
          <br>
          <form action="" method="post">

               <?php

               if (isset($_POST['simpan'])) {
                    $usia = $_POST['usia'];
                    $filmId = $_POST['judul'];
                    $nama = $_POST['nama'];


                    $minUsia = $listFilm[$filmId]['min-usia'];
                    $harga = $listFilm[$filmId]['harga'];

                    if ($usia > $minUsia) {
                         echo "<h2 style='color: green'>Hai $nama Silahkan Untuk Membayar Sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
                    } else {
                         echo "<h2 style='color: red'>Usia $nama belum cukup</h2>";
                    }
               }

               ?>
          </form>
     </center>
</body>

</html>