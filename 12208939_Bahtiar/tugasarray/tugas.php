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
          min-height: 70vh;
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
          margin-top: 1px;

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

   /* CSS untuk elemen SVG */
svg {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: auto; /* Untuk menjaga aspek rasio SVG */
    z-index: -1; /* Mengirimkan SVG ke lapisan belakang */
}

/* CSS untuk elemen lain di halaman */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
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
               "judul" => "Spiderman No Way Home",
               "min-usia" => 12,
               "harga" => 35000
          ],
          [
               "judul" => "Spongebob The Movie",
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
                         <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                         <td>Usia : </td>
                         <td><input type="number" name="usia" required></td>
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
                         echo "<h2 style='color: black'>Hai $nama Silahkan Untuk Membayar Sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
                    } else {
                         echo "<h2 style='color: black'>Usia $nama belum cukup</h2>";
                    }
               }

               ?>
          </form>
     </center>
</body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,
160C384,203,480,245,576,245.3C672,245,768,203,864,192C960,181,1056,203,1152,197.3C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,
320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</html>