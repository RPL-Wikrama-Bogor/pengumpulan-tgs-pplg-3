<?php
function tambahSatuDetik($jam, $menit, $detik)
{
    $detik++;
    if ($detik >= 60) {
        $detik = 0;
        $menit++;
        if ($menit >= 60) {
            $menit = 0;
            $jam++;
            if ($jam >= 24) {
                $jam = 0;
            }
        }
    }

    return sprintf('%02d:%02d:%02d', $jam, $menit, $detik);
}

if (isset($_POST['submit'])) {
    $input_jam = $_POST['jam'];
    $input_menit = $_POST['menit'];
    $input_detik = $_POST['detik'];

    $waktu_baru = tambahSatuDetik($input_jam, $input_menit, $input_detik);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Tambah Satu Detik</title>
     <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
     <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
     @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

     /* contact section starts */

     body {
          background-image: url(img/adven.gif);
          background-size: cover;
          font-family: "Poppins", sans-serif;
     }

     .contact {
          /* background: lightblue; */
          min-height: 60vh;
     }

     h1 {
          text-align: center;
          margin-bottom: 20px;
          color: black;
     }

     .contact .card .content {
          margin-top: 3.9rem;
          /* max-width: 1440px; */
          /* width: 90%; */
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 2.5rem 2rem;
          border-radius: 5rem;

          backdrop-filter: blur(1rem);
          box-shadow: 1.3rem 1.3rem 1.3rem rgba(0, 0, 0, 0.7);

          border-top-color: rgba(225, 225, 225, 0.1);
          border-left-color: rgba(225, 225, 225, 0.1);
          border-bottom-color: rgba(225, 225, 225, 0.1);
          border-right-color: rgba(225, 225, 225, 0.1);
     }

     .contact .content .image-box {
          max-width: 60%;
          margin-left: 4rem;
     }

     .contact .content .image-box img {
          width: 100%;
          height: 40rem;
          position: relative;
     }

     .contact .content form {
          width: 45%;
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

     form i {
          position: absolute;
          top: 50%;
          left: 20px;
          color: rgb(255, 255, 255);
          font-size: 17px;
          pointer-events: none;
          transform: translateY(-50%);
     }

     form .field input,
     form .message textarea {
          width: 84%;
          height: 90%;
          padding: 0 19px 0 45px;
          font-size: 10px;
          font-family: "Poppins", sans-serif;
          border-radius: 15px;
          background: azure;
     }


     form .message textarea::-webkit-scrollbar {
          width: 0px;
     }

     form .button-area {

          text-align: center;

     }

     form .message {
          position: relative;
          margin: 1rem;
          width: 100%;
     }

     form .message i {
          top: 25px;
          font-size: 20px;
          /* left: px; */
     }

     form .message textarea {
          min-height: 100px;
          max-height: 20px;
          max-width: 10%;
          min-width: 82.3%;
          padding: 10px 20px 0 48px;
     }

     form .message textarea::-webkit-scrollbar {
          width: 0px;
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

     .button-area span {
          font-size: 17px;
          padding: 1rem;
          display: none;
     }

     .button-area button i {
          position: relative;
          top: 6px;
          left: 2px;
          font-size: 1.5rem;
          transition: 0.3s;
          color: #fff;
     }

     .button-area button:hover i {
          left: 10px;
     }
     </style>
</head>

<body>
     <section class="contact">
          <div class="card">
               <div class="content">
                    <div class="image-box">
                         <img draggable="false" src="img/cntct.png" alt="" />
                    </div>
                    <form action="" method="post">
                         <h1>Data Waktu Setelah Ditambahkan 1 Detik</h1>
                         <div class="form-group">
                              <div class="field" for="jam">
                                   <label for="jam"></label>
                                   <input type="number" id="jam" name="jam" autofocus placeholder="Jam" min="0" max="23"
                                        required>
                              </div>
                              <div class="field" for="jam">
                                   <label for="menit"></label>
                                   <input type="number" id="menit" name="menit" autofocus placeholder="Menit" min="0"
                                        max="59" required>
                              </div>
                              <div class="field" for="jam">
                                   <label for="detik"></label>
                                   <input type="number" id="detik" name="detik" autofocus placeholder="Detik" min="0"
                                        max="59" required>
                              </div>
                              <div class="button-area">
                                   <button type="submit" name="submit">Submit</button>
                              </div>
                              <br>
                              <div class="message">
                                   <textarea>
                            <?php if (isset($waktu_baru)) : ?>
                            <?php echo $waktu_baru; ?>
                            <?php endif; ?>
                            </textarea>
                                   <i class="fas fa-phone-alt"></i>
                              </div>
                         </div>
                    </form>

               </div>
          </div>
     </section>
</body>

</html>