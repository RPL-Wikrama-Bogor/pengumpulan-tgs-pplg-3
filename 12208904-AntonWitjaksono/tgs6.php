  </style>
</head>
<body>
  <form method="post" action="">
    <label for="waktu">Input Waktu (detik)</label>
    <input type="number" name="waktu" id="waktu" maxlength="5">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
      $jam;
      $menit;
      $detik;
      $hasil;

  if (isset($_POST['submit'])) {
    $waktu = $_POST['waktu'];

    
    if ($waktu >= 3600){
      $jam = floor($waktu / 3600);
      $waktu = $waktu - ($jam*3600);
      
    } else {
        $jam = 0;
    }

    if($waktu >= 60){
      $menit = floor($waktu / 60);
      $waktu = $waktu - ($menit*60);
    } else {
        $menit = 0;
    }

      $detik = $waktu;
      $hasil = $jam . " jam " . $menit . " menit " . $detik. " detik ";
      echo $hasil;
  }    

  ?>
</body>
</html>