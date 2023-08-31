<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 11</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Informasi Pegawai</h1>
        </header>
        <main>
            <form action="" method="post">
                <label for="employeeCode">Kode Pegawai:</label>
                <input type="text" id="employeeCode" name="employeeCode" required placeholder=" Contoh : 32205199505">
                <button type="submit">Submit</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $employeeCode = $_POST["employeeCode"];
                if (strlen($employeeCode) == 11) {
                    $golongan = $employeeCode[0];
                    $tanggal = substr($employeeCode, 1, 2);
                    $bulan = substr($employeeCode, 3, 2);
                    $tahun = substr($employeeCode, 5, 4);
                    $nomorUrut = substr($employeeCode, 9, 2);

                    $bulanArr = [
                        "01" => "JANUARI", "02" => "FEBRUARI", "03" => "MARET", "04" => "APRIL",
                        "05" => "MEI", "06" => "JUNI", "07" => "JULI", "08" => "AGUSTUS",
                        "09" => "SEPTEMBER", "10" => "OKTOBER", "11" => "NOVEMBER", "12" => "DESEMBER"
                    ];

                    // Check if the month array key exists before accessing
                    $bulanText = isset($bulanArr[$bulan]) ? $bulanArr[$bulan] : "BULAN TIDAK VALID";

                    // Display the result in a popup
                    echo "<div id='popup' class='popup'>";
                    echo "<div class='popup-content'>";
                    echo "<span class='close' id='close-popup'>&times;</span>";
                    echo "<h2>Hasil:</h2>";
                    echo "<p>Nomor Golongan: $golongan</p>";
                    echo "<p>Tanggal Lahir: $tanggal $bulanText $tahun</p>";
                    echo "<p>Nomor Urut: $nomorUrut</p>";
                    echo "</div>";
                    echo "</div>";

                    echo "<script>
                        const popup = document.getElementById('popup');
                        const closePopup = document.getElementById('close-popup');

                        // Show popup
                        popup.style.display = 'block';

                        // Close popup
                        closePopup.addEventListener('click', function () {
                            popup.style.display = 'none';
                        });
                    </script>";
                } else {
                    echo "<b><p class='error'>Kode Pegawai harus terdiri dari 11 digit!.</p></b>";
                }
            }
            ?>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Informasi Pegawai. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>


<style>
    /* Your CSS styles for the page */
    body {
        font-family: Arial, sans-serif;
        background-color: #E4E4D0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .container {
        max-width: 30rem;
        /* Change the maximum width to 30rem */
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    form {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #555;
    }

    input {
        width: 90%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        padding: 10px 20px;
        background-color: #191D88;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.5s;
    }

    button:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    .result p {
        margin-bottom: 5px;
        color: #333;
    }

    .error {
        color: #900C3F;
    }

    /* Style for popup */
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }
</style>