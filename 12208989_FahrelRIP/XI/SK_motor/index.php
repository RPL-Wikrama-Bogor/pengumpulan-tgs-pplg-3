<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Motor</title>
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

    table {
      background-color: #219C90;
      box-shadow: 1px 1px 10px black;
      width: 25%;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      border: none;
    }

    th, td {
      padding: 10px;
      text-align: left;
      color: white;
    }

    th {
      background-color: #219C90;
    }

    button {
      background: #ffffff;
      padding: 5px 10px;
      color: #000;
      border: none;
      cursor: pointer;
      transition: background 0.5s, color 0.5s;
    }

    button:hover {
      background: gray;
      color: white;
    }

    select {
      width: 100%;
      padding: 5px;
    }

    .output-container {
    background-color: #219C90;
    box-shadow: 1px 1px 10px black;
    width: 25%;
    margin: 0 auto;
    margin-top: 20px;
    padding: 20px;
    border: none;
    color: white;
  }

  </style>
</head>
<body>
  <table>
    <form action="" method="post">
      <tr>
        <th>
          <h2>Rental Motor</h2>
        </th>
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
        <td colspan="3" align="center"><button type="submit" name="kirim">Cetak Bukti Rental</button></td>
      </tr>
    </form>
  </table>
  <br>
  <div class="output-container">
    <h3 color="white">Bukti Rental</h3>
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
  </div>
</body>
</html>
