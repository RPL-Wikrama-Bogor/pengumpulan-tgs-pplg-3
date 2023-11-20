<?php
session_start();

     $judul = [
     "miracle in cell no 7" =>[
          "umur" => "18",
          "harga" => "RP 45.000,00",
          "img" => "img/cell-no-7.jpg"
     ],
     "Your name" =>[
          "umur" => "17",
          "harga" => "RP 50.000,00",
          "img" => "img/spider.png"
     ],
     "Demon Slayer" =>[
          "umur" => "14",
          "harga" => "RP 50.000,00",
          "img" => "img/truman-show.jpg"
     ]
     ];  

     if ( isset($_POST["bayar"])) {
          header("Location: pembayaran.php");
          
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
        background-image:  url("https://wallpaperaccess.com/full/2435550.png")
}
     

     .wrap {
        clear: right;
    }
    
    .card {
  font-family: Arial, sans-serif;
  border-radius: 5px;
  padding: 20px;
    }

     .data{
        width: 48%;
        float: center;
        padding-right: 15px ;
    }

    .pembayaran{
     margin-top: 100px;
        width: 50%;
        color: white;
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
        background-color: black;
  background:rgba(0, 0, 0, 0.20);
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 15px 15px rgba( 0, 0, 0, 0.4);
          

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
           border-radius: 5px;
  padding: 10px;
  color: #fff;
  float: left;
     }

     .button-area button:hover {
          background: aquamarine;

     }
     .pembayaran h1{
          text-align: start;
          color: black;
          font-family: Arial, Helvetica, sans-serif;
          margin-left: 50px;
     }
      select{
          width: 94%;
          height: 90%;
          padding: 0 19px 0 45px;
          font-size: 15px;
          font-family: "Poppins", sans-serif;
          border-radius: 15px;
          background: azure;
     }

     .yourname{
          width: max;
          height: auto;
          
     }
     </style>
</head>
<body>
    <section class="contact">
          <div class="card">
               <div class="content">
                    <form action="" method="post">
                         <h1>Pemesanan tiket</h1>
                         <div class="form-group">
                         <div class="wrap">
                            <div class="data">
                              <div class="field" for="jam">
                                   <label for="nama"></label>
                                   <input type="text" id="nama" name="nama" autofocus placeholder="masukan nama">
                              </div>
                              <div class="field" for="jam">
                                   <label for="umur"></label>
                                   <input type="number" id="umur" name="umur" autofocus placeholder="masukan umur">
                              </div>
                              <div class="field">
                              <select name='film'>
                                    <option value='miracle in cell no 7' >Miracle in cell no 7</option>
                                    <option value='Your name' >Your name</option>
                                    <option value='Demon Slayer' >Demon Slayer</option>
                                </select>
                                </div>
                              <div class="button-area">
                                   <button type="submit" name="submit">Submit</button>
                              </div>
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
                                            <h1>Film yang anda pilih</h1>
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
                                    <?php }elseif($_POST['film'] == 'Your name'){
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
                                    <?php }elseif($_POST['film'] == 'Demon Slayer') {
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