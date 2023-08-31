<?php
function tambahSatuDetik($jam, $menit, $detik) {
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
</head>
<body>
    <form action="" method="post">
        <label for="jam">Jam (hh):</label>
        <input type="number" id="jam" name="jam" min="0" max="23" required>
        <label for="menit">Menit (mm):</label>
        <input type="number" id="menit" name="menit" min="0" max="59" required>
        <label for="detik">Detik (ss):</label>
        <input type="number" id="detik" name="detik" min="0" max="59" required>
        <button type="submit" name="submit">Tambah Satu Detik</button>
    </form>
    
    <?php if (isset($waktu_baru)) : ?>
    <h3>Waktu setelah penambahan satu detik:</h3>
    <p><?php echo $waktu_baru; ?></p>
    <?php endif; ?>
</body>
</html>