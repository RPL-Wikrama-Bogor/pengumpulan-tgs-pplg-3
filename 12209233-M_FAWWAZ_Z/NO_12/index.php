<?php

$jam;
$menit;
$detik;

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<div class="card">
  <h3>FORM INPUT</h3>
    <form action="" method="post">
      <label for="jam">Masukan Jam</label>
      <input type="number" id="jam" name="jam" placeholder="Jam" required>
    
      <label for="menit">Masukan Menit</label>
      <input type="number" id="menit" name="menit" placeholder="Menit" required>
  
      <label for="detik">Masukan Detik</label>
      <input type="number" id="detik" name= "detik" placeholder="Detik" required>
  
      <input type="submit" name="submit" value="Submit" >
    </form>
</div>

</body>
</html>

<?php

if (isset($_POST['submit'])) {
    
$jam = $_POST['jam'];
$menit = $_POST['menit'];
$detik = $_POST['detik'];

$detik = $detik +  1 ;

if ($detik >= 60) {
    $menit = $menit + 1;
}
if ($menit >= 60) {
    $jam = $jam + 1;
    $menit = 00;
    $detik = 00;
}
if ($jam >= 24) {
    $jam = 00;
    $menit = 00;
    $detik = 00;
}

echo sprintf('<h3>%02d  :%02d : %02d</h3>', $jam, $menit, $detik);

}

?>