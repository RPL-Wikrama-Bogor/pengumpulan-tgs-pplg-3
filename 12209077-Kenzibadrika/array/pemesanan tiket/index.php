<?php
session_start();

     $judul = [
     "miracle in cell no 7" =>[
          "umur" => "18",
          "harga" => "RP 45.000,00",
          "img" => "img/cell-no-7.jpg"
     ],
     "spiderman no way home" =>[
          "umur" => "17",
          "harga" => "RP 50.000,00",
          "img" => "img/spider.png"
     ],
     "truman show" =>[
          "umur" => "12",
          "harga" => "RP 50.000,00",
          "img" => "img/truman-show.jpg"
     ]
     ];  

     if ( isset($_POST["bayar"])) {
          header("Location: resi.php");
          exit;
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemesanan tiket</title>
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

     /* contact section starts */

     body {
          font-family: "Poppins", sans-serif;
          background-image: url('img/po.avif');
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
                         <h1>pemesanan tiket menonton film</h1>
                         <div class="form-group">
                         <div class="wrap">
                            <div class="data">
                              <div class="field" for="jam">
                                   <input type="text" id="nama" name="nama" autofocus placeholder="masukan nama">
                              </div>
                              <div class="field" for="jam">
                                   <input type="number" id="umur" name="umur" autofocus placeholder="masukan umur">
                              </div>
                              <div class="field">
                              <select name='film'>
                                    <option value='miracle in cell no 7' >miracle in cell no 7</option>
                                    <option value='spiderman no way home' >spiderman no way home</option>
                                    <option value='truman show' >truman show</option>
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
                                    if ($_POST['film'] == 'miracle in cell no 7') {
                                        if ($_POST['umur'] >= $judul[$_POST['film']]['umur']) {
                              ?>
                                            <h1>film yang ingin anda tonton</h1>
                                            <p> <?= $_POST['film'] . " dengan harga " . $judul[$_POST['film']]['harga']?></p>
                                            <p>apakah anda bersedia membayarnya?</p><br>
                                            <div class="button-area">
                                                <button type="submit" name="bayar">bayar</button>
                                            </div>
                                        <?php }else { ?>
                                             <h1>anda tidak cukup umur</h1>
                                             <p>anda tidak cukup umur untuk menonton film yang anda pilih</p>
                                             <p>silahkan pilih kembali film yang sesuai dengan umur anda</p>
                                        <?php }?>
                                    <?php }elseif($_POST['film'] == 'spiderman no way home'){
                                        if ($_POST['umur'] >= $judul[$_POST['film']]['umur']) {
                                   ?>
                                             <h1>film yang ingin anda tonton</h1>
                                             <p> <?= $_POST['film'] . " dengan harga " . $judul[$_POST['film']]['harga']?></p>
                                             <p>apakah anda bersedia membayarnya?</p><br>
                                             <div class="button-area">
                                                  <button type="submit" name="bayar">bayar</button>
                                             </div>
                                   <?php }else { ?>
                                        <h1>anda tidak cukup umur</h1>
                                        <p>anda tidak cukup umur untuk menonton film yang anda pilih</p>
                                        <p>silahkan pilih kembali film yang sesuai dengan umur anda</p>
                                   <?php }?>
                                    <?php }elseif($_POST['film'] == 'truman show') {
                                        if ($_POST['umur'] >= $judul[$_POST['film']]['umur']) {
                                             ?>
                                                  <h1>film yang ingin anda tonton</h1>
                                                  <p> <?= $_POST['film'] . " dengan harga " . $judul[$_POST['film']]['harga']?></p>
                                                  <p>apakah anda bersedia membayarnya?</p><br>
                                                  <div class="button-area">
                                                       <button type="submit" name="bayar">bayar</button>
                                                  </div>
                                   <?php }else { ?>
                                   <h1>anda tidak cukup umur</h1>
                                   <p>anda tidak cukup umur untuk menonton film yang anda pilih</p>
                                   <p>silahkan pilih kembali film yang sesuai dengan umur anda</p>
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