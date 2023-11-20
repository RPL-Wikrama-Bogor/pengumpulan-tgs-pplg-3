<?php
session_start();

     $judul = [
     "miracle in cell no 7" =>[
          "umur" => "18",
          "harga" => "RP 45.000,00",
          "img" => "img/cell-no-7.jpg"
     ],
     "spiderman no way home" =>[
          "umur" => "17",
          "harga" => "RP 50.000,00",
          "img" => "img/spider.png"
     ],
     "truman show" =>[
          "umur" => "12",
          "harga" => "RP 50.000,00",
          "img" => "img/truman-show.jpg"
     ]
     ];  

     if ( isset($_POST["bayar"])) {
          header("Location: resi.php");
          exit;
     }
?>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">PESAN TIKET</h3>
  </div>
  <div class="card-body">
    <form>
      <div class="input-group">
        <h3>masukan judul film
        <input type="text" class="form-control" placeholder="Input text here...">
        </h3>
        <br>
        <h3>masukan umur anda
        <input type="text" class="form-control" placeholder="Input text here...">
         <button class="btn btn-primary">Submit</button>
          </h3>
        </div>
      </div>
    </form>
  </div>
</div>

<style>

body {
  background-image: linear-gradient(to top, #183D3D, #352F44);
  background-color: #2f52b1;
}


.container {
  background-image: linear-gradient(to right, #3f9c9c, #efb400);
  padding: 50px;
}

.card {
  font-family: Arial, sans-serif;
  border-radius: 5px;
  padding: 20px;
}

.card-header {
  text-align: center;
  color: white;
}

.card-body {
  background-color: black;
  background:rgba(0, 0, 0, 0.20);
  padding: 20px;
  border-radius: 5px;
}

.input-group {
  display: flex;
  justify-content: space-between;
}

.input-group-append {
  flex-grow: 1;
}

.input-group input {
  border-radius: 5px 5px 0 0;
  border: none;
  outline: none;
  padding: 10px;
  text-align: center;
}

.input-group button {
  border-radius: 5px;
  padding: 10px;
  background-color: #B9B4C7;
  color: #fff;
  cursor: pointer;
}

.button-primary:hover {
  background-color: #2196F3;
}
</style>