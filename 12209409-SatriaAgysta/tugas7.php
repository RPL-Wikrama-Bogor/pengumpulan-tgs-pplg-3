<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>
  <h2>Kalkulator Harga Jeruk</h2>
  <form method="POST" action="">
    <label for="">Input harga per gram : </label>
    <input type="number" name="total_gram"><br><br>
    <button style="width: 30vh;" type="submit" name="submit">Submit</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $total_gram = $_POST['total_gram'];

    $harga_sebelum = 500 * $total_gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    // Format angka dengan titik sebagai pemisah ribuan
    $harga_sebelum_format = number_format($harga_sebelum, 0, ',', '.');
    $diskon_format = number_format($diskon, 0, ',', '.');
    $harga_setelah_format = number_format($harga_setelah, 0, ',', '.');

    echo "<br>Harga sebelum Rp." . $harga_sebelum_format . ", lalu mendapatkan diskon sebesar Rp." . $diskon_format . "<br> jumlah yang harus dibayar Rp." . $harga_setelah_format;
  }
  ?>

</body>

</html>
