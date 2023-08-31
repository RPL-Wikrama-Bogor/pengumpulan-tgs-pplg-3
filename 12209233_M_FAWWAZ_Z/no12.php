<?php

$jam;
$menit;
$detik;

?>

<!DOCTYPE html>
<html>
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

<style>
  @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap');

.card {
    width: 300px;
    background-color: #ccc;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 0 auto;
    margin-top: 70px;
}

input[type=number]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.card h3 {
    text-align: center;
    color: #435334;
    display: flex;
    justify-content: center;
    font-family: 'Rowdies', cursive;
}

h3 {
    text-align: center;
    color: #435334;
    display: flex;
    justify-content: center;
    font-family: 'Rowdies', cursive;
}

/* .card form {
    display: flex;
    flex-direction: column;
  } */

  .card label, .card input[type="number"], .card input[type="submit"] {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    font-family: 'Rowdies', cursive;
  }

  .card input[type="submit"] {
    background-color: #408321;
    color: rgb(255, 255, 255);
    border: none;
    cursor: pointer;
    font-family: 'Rowdies', cursive;;
  }
  .card input[type="submit"]:hover {
    background-color: #408321c2;
    color: rgb(255, 255, 255);
    border: none;
    cursor: pointer;
    font-family: 'Rowdies', cursive;
  }
  
  
  @media (max-width: 600px) {
    .card {
      width: 100%;
    }
  }  
</style>