<?php
session_start();

     $padang = [
     "rendang" =>[
          "nama" => " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . rendang",
          "harga" => "12000"
     ],
     "ayam bakar" =>[
          "nama" => " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . ayam bakar",
          "harga" => "10000"
     ],
     "ayam pop" =>[
          "nama" => " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . ayam pop",
          "harga" => "13000"
     ],
     "es teh" =>[
          "nama" => " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . es teh",
          "harga" => "5000"
     ],
     "es jeruk" =>[
          "nama" => " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . es jeruk",
          "harga" => "7000"
     ],
     "air putih" =>[
          "nama" => " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . air putih",
          "harga" => "3000"
     ]
     ];  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemesanan tiket</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

    body {
          font-family: "Poppins", sans-serif;
          /* background-image: url('img/po.avif'); */
          background-color: black;
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
          margin-top: 1rem;
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
                         <h1>pemesanan</h1>
                         <div class="form-group">
                         <div class="wrap">
                            <div class="data">
                            
                            <!-- <div class="field" for="jam">
                               <label for="nama">nama pemesan</label>
                               <input type="text" id="nama" name="nama" autofocus placeholder="masukan nama" required>
                            </div> -->
                            <p>lauk pauk</p>
                            <div class="field">
                            <select name='makanan'>
                                <option value='rendang' >rendang</option>
                                <option value='ayam bakar' >ayam bakar</option>
                                <option value='ayam pop' >ayam pop</option>
                            </select>
                            </div>
                            <p>minuman</p>
                            <div class="field">
                            <select name='minuman'>
                                <option value='es teh' >es teh</option>
                                <option value='es jeruk' >es jeruk</option>
                                <option value='air putih' >air putih</option>
                            </select>
                            </div>
                            <p>jumlah makanan</p>
                            <div class="field" for="jam">
                               <input type="number" id="nama" name="j-makanan" autofocus placeholder="masukan jumlah makanan">
                            </div>
                            <p>jumlah minuman</p>
                            <div class="field" for="jam">
                                <input type="number" id="umur" name="j-minuman" autofocus placeholder="masukan jumlah minuman">
                            </div>
                                
                            <div class="button-area">
                                <button type="submit" name="submit">pesan</button>
                            </div>
                            </div>

                            <div class="pembayaran">
                                <?php 
                                if (isset($_POST['submit'])) {
                                    $h_makan = $padang[$_POST['makanan']]['harga'] * $_POST['j-makanan'];
                                    $h_minuman = $padang[$_POST['minuman']]['harga'] * $_POST['j-minuman'];
                                ?>
                                    <h1>pesaan yang anda pesan</h1>
                                    <p>makanan <?=$padang[$_POST['makanan']]['nama']?></p>
                                    <?php if ($_POST['j-makanan'] >= '5') {
                                            $diskon = $h_makan * 0.05 ;
                                            $ha_makan = $h_makan - $diskon;
                                        ?>
                                        <p>
                                            <?php echo $_POST['makanan'] . " X" . $_POST['j-makanan'] . " . . . . . . . . . . . . . . . . . . . . . . . . . RP" . $ha_makan;
                                            $_SESSION["makan"] = $ha_makan;
                                            ?>(diskon 5%)
                                        </p>
                                <?php }else{ ?>
                                    <p>
                                        <?php echo $_POST['makanan'] . " X" . $_POST['j-makanan'] . " . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . RP" . $h_makan;
                                        $_SESSION["makan"] = $h_makan;
                                        ?>
                                    </p>
                                <?php } ?>

                                    <p>minuman <?=$padang[$_POST['minuman']]['nama']?></p>
                                    <?php if ($_POST['j-minuman'] >= '5') {
                                            $diskon = $h_minuman * 0.05 ;
                                            $ha_minuman = $h_minuman - $diskon;
                                        ?>
                                        <p>
                                            <?php echo $_POST['minuman'] . " X" . $_POST['j-minuman'] . " . . . . . . . . . . . . . . . . . . . . . . . . . RP" . $ha_minuman;
                                            $_SESSION["minum"] = $ha_minuman;
                                            ?>(diskon 5%)
                                        </p>
                                    <?php }else{ ?>
                                        <p>
                                            <?php echo $_POST['minuman'] . " X" . $_POST['j-minuman'] . " . . . . . . . . . . . . . . . . . . . . . . . . . . . . .  . RP" . $h_minuman;
                                            $_SESSION["minum"] = $h_minuman;
                                            ?>
                                        </p>
                                    <?php } 
                                    $total = $_SESSION["makan"] + $_SESSION["minum"];
                                    ?>
                                <p>total . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . RP<?= $total?></p>
                                <div class="button-area">
                                <button type="submit" name="submit">bayar</button>
                            </div>
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