<!-- preparation -->
<?php
$arrAngka = [];
$nilaiTerbesar;
$nilaiTerkecil;
$rataRata;
?>
<!-- input -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Max, Min, Ave</title>
</head>

<body>
    <form action="" method="post">
        <div id="wrap">
            <div style="display: flex;">
                <label for="angka">Masukkan Angka : </label>
                <!-- name dengan tanda [] berarti bahwa semua input dengan name yang sama, valuenya akan diambil semua dan disimpan dalam bentuk array -->
                <input type="number" name="angka[]" id="angka">
            </div>
        </div>
        <p style="cursor: pointer; color: blue" onclick="tambahInput()">Tambah Input Form</p>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <script>
        let jumlahInput = 1;

        function tambahInput() {
            // untuk mendefinisikan variable pada JS menggunakan let/const : let untuk variable yg bisa berubah valuenya, const variable yg tdk bisa diubah valuenya
            // backtip ( `` ) digunakan untuk pembuatan string yang tidak satu baris : bisa dipake di php juga
            let inputElement = `
            <br><div style="display: flex;">
                <label for="angka">Masukkan Angka : </label>
                <input type="number" name="angka[]" id="angka">
            </div>
            `;
            // jumlah input di increments untuk mengetahui skrng jumlah inputnya uda ada berapa
            // jumlahInput = jumlahInput + 1;
            jumlahInput += 1;
            // jumlahInput++
            // document : pengambil alihan baris kode HTML
            // getElementById : mengambil tag HTML yang memiliki id tersebut : selain itu, ada getElementByClass, getElementByTagName, querySelector tergantung identitas yg akan diambil
            if (jumlahInput < 10) {
                // kalau jumlahInput nya masi kurang dr 10, input baru bole dimuncul/tambahin
                // innerHTML : menambahkan tag html baru
                document.getElementById('wrap').innerHTML += inputElement;
            }
        }
    </script>
    <!-- proses -->
    <?php
    if (isset($_POST['submit'])) {
        $arrAngka = $_POST['angka'];
        $nilaiTerbesar = max($arrAngka);
        $nilaiTerkecil = min($arrAngka);
        // array_sum : seluruh item arr dijumlahkan, count : menghitung jumlah item yg terdapat pada array
        $rataRata = array_sum($arrAngka) / count($arrAngka);
        echo "Nilai Terbesar : " . $nilaiTerbesar . "<br> Nilai Terkecil : " . $nilaiTerkecil . "<br> Rata-Rata : " . $rataRata;
    }
    ?>
</body>

</html>