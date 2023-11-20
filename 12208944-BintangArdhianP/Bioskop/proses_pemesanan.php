<?php
session_start();

     $judul = [
     "One Piece Movie Red" =>[
          "umur" => "13",
          "harga" => "RP 45.000,00",
          "img" => "img/on.jpg"
     ],
     "Spider-Man 4: New Home" =>[
          "umur" => "13",
          "harga" => "RP 50.000,00",
          "img" => "img/sp.jpg"
     ],
     "Deadpool 3" =>[
          "umur" => "17",
          "harga" => "RP 50.000,00",
          "img" => "img/deadpool.jpg"
     ]
     ];  

     if ( isset($_POST["bayar"])) {
          header("Location: tugss.php");
          exit;
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket CG1</title>
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

     /* contact section starts */

     body {
          font-family: "Poppins", sans-serif;
          background-image: url('img/c.jpg');
          background-size: cover;
     }

     .wrap {
        clear: right;
    }
    
    .card{
          background-color: rgba( 255, 255, 255, 0.7);
          box-shadow: 0 15px 15px rgba( 0, 0, 0, 0.4);
          width: 100%;
          height: auto;
          border-radius: 50px;
          text-align: center;
          margin-top: 13%;
        }

     .data{
        width: 48%;
        float: left;
        padding-right: 15px ;
    }

    .pembayaran{
        width: 50%;
        float: right;
    }

     .contact {
          min-height: 60vh;
     }

     h1 {
          text-align: center;
          margin-bottom: 20px;
          color: black;
     }

     .contact .card .content {
          margin-top: 3.9rem;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 2.5rem 2rem;
          border-radius: 5rem;
          /* background-color: ; */
     }

     .contact .content form {
          width: 100%;
          margin-left: 3rem;
     }

     form .form-group {
          display: flex;
          flex-direction: column;
          justify-content: center;
     }

     .form-group .field {
          height: 50px;
          display: flex;
          position: relative;
          margin: 0.7rem;
          width: 100%;
     }

     form .field input,
     form .field select,
     form .message textarea {
          width: 84%;
          height: 90%;
          padding: 0 19px 0 45px;
          font-size: 15px;
          font-family: "Poppins", sans-serif;
          border-radius: 15px;
          background: azure;
     }

     form .button-area {
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
    <section class="contact">
          <div class="card">
               <div class="content">
                    <form action="" method="post">
                         <h1>Pemesanan Tiket CG1</h1>
                         <div class="form-group">
                         <div class="wrap">
                            <div class="data">
                              <div class="field" for="jam">
                                   <label for="nama"></label>
                                   <input type="text" id="nama" name="nama" autofocus placeholder="Masukan nama">
                              </div>
                              <div class="field" for="jam">
                                   <label for="umur"></label>
                                   <input type="number" id="umur" name="umur" autofocus placeholder="Masukan umur">
                              </div>
                              <div class="field">
                              <select name='film'>
                                    <option value='One Piece Movie Red' >One Piece Movie Red</option>
                                    <option value='Spider-Man 4: New Home' >Spider-Man 4: New Home</option>
                                    <option value='Deadpool 3' >Deadpool 3</option>
                                </select>
                                </div>
                              <div class="button-area">
                                   <button type="submit" name="submit">Submit</button>
                              </div>
                              </div>
                              <div class="pembayaran">
                                <?php 
                                if (isset($_POST['submit'])) {
                                   $_SESSION["nama"] = $_POST['nama'];
                                   $_SESSION["film"] = $_POST['film'];
                                   $_SESSION["img"] = $judul[$_POST['film']]['img'];
                                   $_SESSION["harga"] = $judul[$_POST['film']]['harga'];
                                    if ($_POST['film'] == 'One Piece Movie Red') {
                                        if ($_POST['umur'] >= $judul[$_POST['film']]['umur']) {
                              ?>
                                            <h1>Film yang ingin anda tonton</h1>
                                            <p> <?= $_POST['film'] . " dengan harga " . $judul[$_POST['film']]['harga']?></p>
                                            <p>Apakah anda bersedia membayarnya?</p><br>
                                            <div class="button-area">
                                                <button type="submit" name="bayar">bayar</button>
                                            </div>
                                        <?php }else { ?>
                                             <h1>Anda tidak cukup umur</h1>
                                             <p>Anda tidak cukup umur untuk menonton film yang anda pilih</p>
                                             <p>Silahkan pilih kembali film yang sesuai dengan umur anda</p>
                                        <?php }?>
                                    <?php }elseif($_POST['film'] == 'Spider-Man 4: New Home'){
                                        if ($_POST['umur'] >= $judul[$_POST['film']]['umur']) {
                                   ?>
                                             <h1>Film yang ingin anda tonton</h1>
                                             <p> <?= $_POST['film'] . " dengan harga " . $judul[$_POST['film']]['harga']?></p>
                                             <p>Apakah anda bersedia membayarnya?</p><br>
                                             <div class="button-area">
                                                  <button type="submit" name="bayar">bayar</button>
                                             </div>
                                   <?php }else { ?>
                                        <h1>Anda tidak cukup umur</h1>
                                        <p>Anda tidak cukup umur untuk menonton film yang anda pilih</p>
                                        <p>Silahkan pilih kembali film yang sesuai dengan umur anda</p>
                                   <?php }?>
                                    <?php }elseif($_POST['film'] == 'Deadpool 3') {
                                        if ($_POST['umur'] >= $judul[$_POST['film']]['umur']) {
                                             ?>
                                                  <h1>Film yang ingin anda tonton</h1>
                                                  <p> <?= $_POST['film'] . " dengan harga " . $judul[$_POST['film']]['harga']?></p>
                                                  <p>Apakah anda bersedia membayarnya?</p><br>
                                                  <div class="button-area">
                                                       <button type="submit" name="bayar">bayar</button>
                                                  </div>
                                   <?php }else { ?>
                                   <h1>Anda tidak cukup umur</h1>
                                   <p>Anda tidak cukup umur untuk menonton film yang anda pilih</p>
                                   <p>Silahkan pilih kembali film yang sesuai dengan umur anda</p>
                                   <?php }?>
                                   <?php } ?>
                              <?php } ?>
                                </div>
                              <br>
                         </div>
                    </form>
               </div>
          </div>
     </section>
</div>
</body>
</html>