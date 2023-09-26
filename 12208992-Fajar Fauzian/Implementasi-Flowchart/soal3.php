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
               background-image: url(img/gatau.gif);
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

               border-radius: 3rem;
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
               border: 1px solid #ccc;
               border-radius: 4px;
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
                    <h1>Menentukan Angka Terbesar</h1>
                    <form action="" method="post">
                         <br>
                         <div class="mb-3">
                              <label for="angka_satu" class="form-label"></label>
                              <input type="number" autofocus placeholder="Masukan Angka Pertama.." class="form-control" name="angka_satu" id="angka_satu">
                         </div>
                         <div class="mb-3">
                              <label for="angka_dua" class="form-label"></label>
                              <input type="number" autofocus placeholder="Masukan Angka Kedua.." class="form-control" name="angka_dua" id="angka_dua">
                         </div>
                         <div class="mb-3">
                              <label for="angka_tiga" class="form-label"></label>
                              <input type="number" autofocus placeholder="Masukan Angka Ketiga.." class="form-control" name="angka_tiga" id="angka_ketiga">
                         </div>

                         <div class="mb-3"></div>
                         <button type="submit" class="btn btn-light" name="submit">Submit</button>
                         <br>
                         <br>
                         <input autofocus placeholder="
                         <?php
                         if (isset($_POST['submit'])) {

                              $nilai1 = $_POST['angka_satu'];
                              $nilai2 = $_POST['angka_dua'];
                              $nilai3 = $_POST['angka_tiga'];

                              $nilai_terbesar = max($nilai1, $nilai2, $nilai3);

                              echo "$nilai_terbesar";
                         }
                         ?>" class="form-control">
                         <br>
               </div>
               </form>
          </div>
     </div>
     </div>
</body>

</html>