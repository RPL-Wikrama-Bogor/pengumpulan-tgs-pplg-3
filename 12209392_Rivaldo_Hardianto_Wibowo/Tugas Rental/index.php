<style>
    .forum{
        width:550px;
        height:50%;
        background-color:grey;
        border-radius:8px;
        }
        .form{
           align-item
        }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Motor</title>
</head>
<body>
    <center>
       <div class="forum">
        <div class="form">
        <h1>Rental Motor</h1>
                <form action="" method="post">
                    <label for="nama">Masukan Nama</label> <br>
                    <input type="text" name="nama" id="nama"> <br>
                    <label for="waktu">Pemakaian berapa hari</label> <br>
                    <input type="number" name="waktu" id="wakru"> <br>
                    <label for="jenis">Jenis Motor</label>
                    <select name="jenis" id="jenis">
                        <option value="scoopy">Scoopy</option>
                        <option value="aerox">Aerox</option>
                        <option value="nmax">Nmax</option>
                        <option value="soulgt">Soul Gt</option>
                    </select> <br>
                    <button type="submit" name="kirim">kirim</button>
                </form>

                <p>
                    <?php
            include 'function.php';
            $proses = new peminjaman();
            $proses->setharga(100000,200000,250000,150000);
                if (isset($_POST['kirim'])) {
                    $proses->nama = $_POST['nama'];
                    $proses->hari = $_POST['waktu'];
                    $proses->jenis = $_POST['jenis'];
                    $proses->cetakpeminjaman();
                }
            ?>
        </p>
        </div>
    </div>
 
</center>
</body>
</html>