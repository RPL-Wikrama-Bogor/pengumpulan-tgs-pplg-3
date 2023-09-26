<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    body{
        
    }

    button{
      background: #white;
      padding: 3px;
      margin-top: 10px;
      color: #000;
      transition: 0.5s;
    }

    button:hover{
      background: gray;
      color: white;
    }

    table{
      background: #219C90;
        box-shadow: 1px 1px 10px black;
        width: 25%;
        margin-left: 550px;
        margin-top: 250px;
        padding: 20px;
    }
    
</style>

<body>
    <table>
      <form action="" method="post">
        <tr>
          <td>
            <h2>Rental Motor</h2>
          </td>
        </tr>
        <tr>
          <td>Nama Pelanggan</td>
          <td>:</td>
          <td><input name="nama" type="text" required autocomplete="off"></td>
        </tr>
        <tr>
          <td>Lama Waktu Rental (per hari)</td>
          <td>:</td>
          <td><input name="hari" type="number" required></td>
        </tr>
        <tr>
          <td>Jenis Motor</td>
          <td>:</td>
          <td>
            <select name="jenis" id="" required>
              <option value="XSR">Pilih Jenis Motor</option>
              <option value="XSR">XSR</option>
              <option value="Vario">Vario</option>
              <option value="Nmax">Nmax</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><button type="submit" name="kirim">Cetak Bukti Rental</button></td>
        </tr>
      </form>
    </table>
    <br>
    <?php
    include 'control.php';
    $proses = new Perental();
    $proses->setHarga(80000, 75000, 70000);
    if (isset($_POST['kirim'])) {
      $proses->nama_peminjam = $_POST['nama'];
      $proses->hari = $_POST['hari'];
      $proses->jenis = $_POST['jenis'];
      $proses->cetakBuktiRental();
    }
    ?>
</body>

</html>