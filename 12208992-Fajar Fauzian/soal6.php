<?php
$waktu;
$jam;
$menit;
$detik;
// = "" untuk mendefinisikan bahwa variable ini tipe datanya string
$hasil = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Menentukan Angka Terbesar</title>
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
          @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

          body {
               background-image: url(img/all.gif);
               background-size: cover;
          }

          .title {
               margin: 10%;
               width: 100%;
               max-width: 400px;
               font-size: 4rem;
               text-align: center;
          }

          .card {
               width: 100%;
               max-width: 800px;
               padding: 2rem 1rem 1.5rem;

               border-radius: 1rem;
               border: 1px solid transparent;

               backdrop-filter: blur(8rem);
               box-shadow: 1.3rem 1.3rem 1.3rem rgba(0, 0, 0, 0.7);

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

          body {
               font-family: Arial, sans-serif;
               margin: 0;
               padding: 0;
          }

          .container {
               max-width: 800px;
               margin: 0 auto;
               padding: 20px;
          }

          h1 {
               text-align: center;
               font-family: "Poppins", sans-serif;
               color: black;
          }

          .checkout-form {
               margin-top: 30px;
          }

          .form-group {
               margin-bottom: 20px;
          }

          label {
               display: block;
               font-weight: bold;
               margin-bottom: 5px;
          }

          input[type="text"],
          input[type="email"],
          select {
               width: 100%;
               padding: 10px;
               border: 0.7px solid #ccc;
               border-radius: 5px;
               font-size: 16px;
          }

          input[type="submit"] {
               background-color: #4caf50;
               color: white;
               padding: 10px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
               font-size: 16px;
          }

          input[type="submit"]:hover {
               background-color: #45a049;
          }
     </style>
</head>

<body>
     <div class="position-absolute top-50 start-50 translate-middle">
          <div class="cb1 card" style="width: 30rem;">
               <div class="card-body">
                    <h1>Mengkonversi Waktu Detik</h1>
                    <form action="" method="post">
                         <br>
                         <div class="mb-3">
                              <label for="waktu" class="form-label"></label>
                              <input type="number" autofocus placeholder="Input Number...
                              <?php
                              if (isset($_POST['submit'])) {
                                   $waktu = $_POST['waktu'];
                                   // decision
                                   if ($waktu >= 3600) {
                                        // floor : membulatkan ke bawah
                                        // ceil : membualatkan ke atas
                                        // round : membulatkan keatas dan kebawah
                                        $jam = floor($waktu / 3600);
                                        $waktu -= ($jam * 3600);
                                        $hasil .= $jam . " jam ";
                                   } else {
                                        echo "0 jam ";
                                   }
                                   if ($waktu >= 60) {
                                        $menit = floor($waktu / 60);
                                        $waktu -= ($menit * 60);
                                        $hasil .= $menit . " menit ";
                                   } else {
                                        echo "0 menit ";
                                   }
                                   $detik = $waktu;
                                   $hasil .= $detik . " detik ";
                                   // echo $hasil;
                              }
                              ?>" class="form-control" name="waktu" id="waktu">
                         </div>
                         <button class="mb-3 btn btn-light" type="submit" name="submit">Submit</button>
                         <input type="text" autofocus placeholder="<?php echo $hasil; ?>" class="form-control">
                    </form>
               </div>
          </div>
     </div>
</body>

</html>