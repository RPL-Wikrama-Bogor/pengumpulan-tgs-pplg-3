<?php
$data_siswa = [
    ["nama" => "Gama Husen", "nis" => "12209021", "rombel" => "PPLG", "umur" => "16"],
    ["nama" => "Taufik Ediansyah", "nis" => "12209115", "rombel" => "PPLG", "umur" => "17"],
    ["nama" => "Naufal Gaishani", "nis" => "12209250", "rombel" => "PPLG", "umur" => "18"],
    ["nama" => "Rizky Muhammad", "nis" => "12209268", "rombel" => "PPLG", "umur" => "17"],
    ["nama" => "Fajar Fauzian", "nis" => "12208992", "rombel" => "PPLG", "umur" => "16"],
    ["nama" => "Anton Witcaksono", "nis" => "12208904", "rombel" => "PPLG", "umur" => "17"],
    ["nama" => "Bahtiar Abdul Azis", "nis" => "12208939", "rombel" => "PPLG", "umur" => "17"],
];

if (isset($_POST["cari"])) {
    $cari = $_POST["keyword"];
    $key = array_search($cari, $data_siswa);
}

function cekKataKunci($item)
{
    global $cari;
    return stripos($item["nama"], $cari) !== false;
}
$hasilPencarian = array_filter($data_siswa, "cekKataKunci");
function filterUmurLebihDari17($siswa)
{
    return $siswa["umur"] >= 17;
}

// Menggunakan fungsi array_filter untuk menyaring data
$dataHasilFilter = array_filter($data_siswa, "filterUmurLebihDari17");
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Menampilkan Data Siswa</title>
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
          color: whitesmoke;
          text-align: center;
          background-image: linear-gradient(to bottom right, #0E2954, #00C4FF);
          width: 500px;
          height: 300px;
          margin: 50px auto;
     }

     .title {
          margin: 90%;
          width: 100%;
          max-width: 400px;
          font-size: 4rem;
          text-align: center;
     }

     .btn {
          text-decoration: none;
          color: white;
          font-size: 1rem;
          border-radius: 10px;
          background-color: red;
          border: 0ch;
          padding: 10px 15px;

     }

     .card {
          width: 100%;
          max-width: 500px;
          padding-top: 10px;
          padding-left: 1.5em;
          padding-right: 1.5em;
          border-radius: 1rem;
          padding-bottom: 10px;
          border: 0px solid transparent;
          backdrop-filter: blur(5rem);
          box-shadow: 1.1rem 1.1rem 1.1rem rgba(0, 0, 0, 0.3);
          border-top-color: rgba(225, 225, 225, 0.1);
          border-left-color: rgba(225, 225, 225, 0.1);
          border-bottom-color: rgba(225, 225, 225, 0.1);
          border-right-color: rgba(225, 225, 225, 0.1);
     }

     .cb1 {
          background-color: rgba(225, 225, 225, 0.1);
     }

     .btn:hover {
          box-shadow: 0 0.3rem 1rem rgba(0, 0, 0, 0/3);
     }

     img {
          width: 250px;
          border-radius: 20px;
          -webkit-transition: 0.4s ease;
          transition: 0.4s ease;
     }

     input {
          width: 98%;
          border-radius: 0.5rem;
          min-height: 2rem;
          background-color: lightblue;
          border: 0px solid transparent;
     }

     button {
          color: white;
          font-size: 1rem;
          border-radius: 10px;
          background-color: #053B50;
          border: 0ch;
          padding: 10px 15px;
          margin-top: 10px;
          margin-bottom: 10px;
     }

     h3 {
          margin-bottom: 5px;
     }


     p {
          width: 90%;
          max-width: 500px;
          padding-top: 5px;
          padding-left: 1.5em;
          padding-right: 1.5em;
          border-radius: 1rem;
          border: 1px solid transparent;
          backdrop-filter: blur(1rem);
          border-top-color: rgba(225, 225, 225, 0.1);
          border-left-color: rgba(225, 225, 225, 0.1);
          border-bottom-color: rgba(225, 225, 225, 0.1);
          border-right-color: rgba(225, 225, 225, 0.1);
     }

     .tb {
          width: 90%;
          max-width: 500px;
          padding-top: 5px;
          padding-left: 1.5em;
          padding-right: 1.5em;
          border-radius: 1rem;
          margin-top: 10px;
          border: 1px solid transparent;
          backdrop-filter: blur(1rem);
          border-top-color: rgba(225, 225, 225, 0.1);
          border-left-color: rgba(225, 225, 225, 0.1);
          border-bottom-color: rgba(225, 225, 225, 0.1);
          border-right-color: rgba(225, 225, 225, 0.1);
     }

     .error {
          color: red;
     }
     </style>

</head>

<body>
     <div class="position-absolute top-50 start-50 translate-middle">
          <div class="cb1 card" style="width: 30rem;">
               <div class="card-body">
                    <h1>Menampilkan Data Siswa</h1>
                    <h3>Menampilkan Data Usia Di Atas 17 Tahun :</h3>
                    <form action="" method="post">
                         <label for=""></label>
                         <input autofocus placeholder=" Cari Nama Siswa...." type="text" name="keyword">
                         <button type="submit" name="cari">Cari</button>
                    </form>
                    <?php
                if (isset($_POST["cari"])) {

                    if (!empty($hasilPencarian)) {
                        foreach ($hasilPencarian as $item) {
                ?>
                    <!-- <p>Hasil Data:</p> -->
                    <div class="tb">
                         <label>Nama: <?php echo $item["nama"] ?></label>
                         <label>Nis: <?php echo $item["nis"] ?></label>
                         <label>Umur: <?php echo $item["umur"] ?></label>
                         <label>Rombel: <?php echo $item["rombel"] ?></label>
                    </div>
                    <?php  }
                    } else {
                        echo 'gada goblok';
                    }
                } ?>
                    <form action="" method="post">
                         <h3 for="">Menampilkan Data Siswa Berumur 17 :</h3>
                         <button type="submit" name="submit">Tampilkan</button>
                    </form>
                    <?php
                if (isset($_POST["submit"])) {
                    foreach ($dataHasilFilter as $siswa) {
                ?>

                    <p>Nama dari list yang bernilai lebih dari 17 tahun adalah: <?= $siswa["nama"] ?> </p>
                    <?php   }
                } ?>
               </div>
          </div>
     </div>
</body>

</html>