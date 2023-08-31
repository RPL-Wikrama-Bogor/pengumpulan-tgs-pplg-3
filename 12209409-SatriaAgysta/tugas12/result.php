<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Informasi Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="result">
        <h1>Hasil Perhitungan : </h1>
        <?php
        if(isset($_POST['jam']) && isset($_POST['menit']) && isset($_POST['detik'])) {
            $jam = intval($_POST['jam']);
            $menit = intval($_POST['menit']);
            $detik = intval($_POST['detik']);

            $detikBaru = $detik + 1;
            if ($detikBaru == 60) {
                $detikBaru = 0;
                $menitBaru = $menit + 1;
                if ($menitBaru == 60) {
                    $menitBaru = 0;
                    $jamBaru = $jam + 1;
                    if ($jamBaru == 24) {
                        $jamBaru = 0;
                    }
                } else {
                    $jamBaru = $jam;
                }
            } else {
                $menitBaru = $menit;
                $jamBaru = $jam;
            }

            echo "<p>Waktu awal: " . sprintf("%02d:%02d:%02d", $jam, $menit, $detik) . "</p>";
            echo "<p>Waktu setelah ditambahkan 1 detik: " . sprintf("%02d:%02d:%02d", $jamBaru, $menitBaru, $detikBaru) . "</p>";
            echo '<br><a href="no12.php" class="back-button">Back</a>';
        }
        ?>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0; z-index: -1;">
    <path fill="#39bdb9" fill-opacity="1" d="M0,160L34.3,181.3C68.6,203,137,245,206,256C274.3,267,343,245,411,250.7C480,256,549,288,617,272C685.7,256,754,192,823,170.7C891.4,149,960,171,1029,160C1097.1,149,1166,107,1234,96C1302.9,85,1371,107,1406,117.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path
    </svg>
</body>
</html>

