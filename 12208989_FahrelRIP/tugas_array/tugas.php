    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administator Bioskop</title>
        <style>
            body{
                padding: 200px 500px;
                background-image: linear-gradient(270deg, #bddde1 0, #a6d3db 12.5%, #8ec8d5 25%, #72bcd0 37.5%, #50afcc 50%, #1ea2c8 62.5%, #0095c6 75%, #0089c3 87.5%, #007dc1 100%);
            }

            .bioskop{
                border-radius: 10%;
                padding: 20px 20px;
                max-width: 500px;
                max-height: 500px;
                box-shadow: 5px 10px gray;
                background: white;
                text-align: justify;
            }

            button{
                background: gray;
                color: white;
                padding: 5px;
                border-radius: 10%;
            }

            h1{
                text-align: center;
            }
            label{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="bioskop">
        <h1>Selamat Datang <br> Silahkan Memesan Tiket Terlebih Dahulu</h1>
        <form method="post">
            <label>Judul Film : </label>
            <select name="" id="">
                <option value="">Miracle In Cell No. 7</option>
                <option value="">The Nun 2</option>
                <option value="">The Conjuring 4</option>
            </select>
                <br>
                <br>
            <label>Nama Anda : </label>
            <input type="text" name="nama" id="nama">
            <br>
            <br>
            <label>usia Anda : </label>
            <input type="number" name="age" id="age">
            <br>
            <br>
            <label>Jumlah Tiket Yang Dibeli : </label>
            <input type="number" name="jml" id="jml">
            <br>
            <br>
            <button type="submit" name="submit" value="submit">Pesan Tiket</button>
        </form>
        <br>
        
        
        <?php
            
        if(isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $usia = $_POST['age'];
            $jml = $_POST['jml'];
            $harga = 45000;

            $total = ($jml * 45000); 

            $min_usia = 15;
    
            if($usia >= $min_usia) {
                echo 'Totalnya Jadi : ' . $total;
                echo '<br>';
                echo 'Terimakasih, Selamat Menyaksikan🙏';
            }else{
                echo "Mohon Maaf Usia Anda Tidak Mencukupi, Disarankan Untuk Melihat Film Sesuai Usia Anda🙏";
            }
        }

        ?>
    </div>
    </body>
    </html>