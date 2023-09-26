<?php
$arrAngka = [];
$nilaiTerbesar;
$nilaiTerkecil;
$rataRata;
?>
<!--input-->
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Array Max, Min, Ave</title>
     <style>
     body {
          font-family: Arial, sans-serif;
          background-color: #f0f0f0;
          margin: 0;
          padding: 0;
     }

     form {
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          width: 300px;
          margin: 0 auto;
     }

     label {
          display: block;
          margin-bottom: 10px;
     }

     input[type="number"] {
          width: 100%;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 3px;
     }

     p {
          cursor: pointer;
          color: blue;
          margin-top: 10px;
     }

     button[type="submit"] {
          background-color: blue;
          color: #fff;
          border: none;
          padding: 10px 20px;
          border-radius: 3px;
          cursor: pointer;
     }

     button[type="submit"]:hover {
          background-color: #0073e6;
     }
     </style>
</head>

<body>
     <form action="" method="post">
          <div id="wrap">
               <div style="display: flex;">
                    <label for="angka">Masukan Angka : </label>
                    <!-- name dengan tanda [] berarti bahwa semua input dengan name yang sama,
            valuenya akan diambil semua dan disimpan dalam bentuk array-->
                    <input type="number" name="angka[]" id="angka">
               </div>
          </div>
          <p style="cursor: pointer; color: blue" onclick="tambahInput()">Tambah Input Form</p>
          <button type="submit" name="submit">Kirim</button>
     </form>
     <script>
     let jumlahInput = 1;

     function tambahInput() {
          let inputElement = `
            <div style="display: flex;">
                <label for="angka">Masukan Angka : </label>
                <input type="number" name="angka[]" id="angka">
            </div>
            `;
          //jumlah input di increment
          jumlahInput += 1;
          // document : pengambil alihan baris kode html
          if (jumlahInput < 10) {
               //kalau jumlah input nya masi kurang dari 10, input baru bole di munculkan/tambahin
               //appendChild : menambahkan element/tag baru pada bagian bawah (sebelum penutup) tag yang dimaksud (yng di panggil) pada'document.' : bisanya di tag/html yng di buat lewat js nya bukan HTML langsung
               //innerHTML : menambahkan tah html baru
               document.getElementById('wrap').innerHTML += inputElement;
          }
     }
     </script>
     <!--proses-->
     <?php
    if (isset($_POST['submit'])){
    //mengisi arrangka dengan seluruh value dari input yang memliki name angka
    $arrAngka = $_POST['angka'];
    $nilaiTerbesar = max($arrAngka);
    $nilaiTerkecil = min($arrAngka);
    //array_sum : seluruh item dijumlahkan, count : menmghitung jumlah item yang terdapat pada array
    $rataRata = array_sum($arrAngka) / count($arrAngka);
    echo "nilai terbesar : " . $nilaiTerbesar . "<br> nilai terkecil : " . $nilaiTerkecil . "<br> rata-rata : " . $rataRata;
}
?>
</body>

</html>