<?php

$datta = array('kenzi', 'reyfal', 'bintang', 'rama');

$data = [
    [
         "nama" => "Kenzi Badrika",
         "umur" => "17",
         "nis" => "12209077",
         "rombel" => "PPLG xi-3"
    ],
    [
         "nama" => "Reyfal Meibiansyah",
         "umur" => "12",
         "nis" => "12209340",
         "rombel" => "PPLG xi-2"
    ],
    [
         "nama" => "Leonardo Bintang Ardhian Putra Hartono",
         "umur" => "18",
         "nis" => "12208944",
         "rombel" => "PPLG xi-3"
    ],
    [
         "nama" => "Rama Daris Pranata",
         "umur" => "15",
         "nis" => "12209362",
         "rombel" => "PPLG xi-3"
    ]
    ];

if (isset($_POST['cari'])) {
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .center{
            display: grid;
            place-items: center;
        }
        .margin{
            margin-left: 20px;
        }
    </style>
</head>
<body>

<!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    <!-- navbar -->    

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Data</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <form action="" method="post">
                <button name="cek" tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" 
                data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                    semua siswa
            </button>
            </form>
            </li>

            <li class="nav-item margin">
            <form action="" method="post">
                <button name="cek17" tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" 
                data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                    cek siswa umur 17+
            </button>
            </form>
            </li>
        </ul>
        
        <form class="d-flex" role="search" action="" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
                autofocus autocomplete="off">
            <button class="btn btn-outline-success" type="submit" name="cari">
                Search
            </button>
        </form>
        </div>
    </div>
    </nav>

<!-- navbar end -->    <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   <!-- navbar end -->   

<!-- card -->    <!-- card -->   <!-- card -->   <!-- card -->   <!-- card -->   <!-- card -->   <!-- card -->   <!-- card -->   <!-- card -->   

<?php
 if (isset($_POST['cari'])) {
    if ($_POST['keyword'] == "kenzi" || $_POST['keyword'] == "bintang" || $_POST['keyword'] == "rama" || $_POST['keyword'] == "reyfal" ) {
        $index = array_search($_POST['keyword'], $datta);
?>
        <div class="center">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data[$index]['nama'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data[$index]['nis'] ?></h6>
                <p class="card-text"><?= $data[$index]['nama'] ?> adalah salah satu siswa SMK Wikrama
                dia ber umur <?= $data[$index]['umur'] ?> dan rombel <?= $data[$index]['rombel'] ?>
                </p>
            </div>
            </div>
        </div>
<?php 
}else{
?>
    <h1>maaf data yang ada cari tidak di temukan</h1>
    <p>data yang tersedia -kenzi -bintang -rama -reyfal</p>
        
<?php }
}

 if (isset($_POST['cek'])) { 
    for($i=0; $i < count($datta); $i++){
?>
        <div class="center">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data[$i]['nama'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data[$i]['nis'] ?></h6>
                <p class="card-text"><?= $data[$i]['nama'] ?> adalah salah satu siswa SMK Wikrama
                dia ber umur <?= $data[$i]['umur'] ?> dan rombel <?= $data[$i]['rombel'] ?>
                </p>
            </div>
            </div>
        </div>
<?php 
}
}

 if (isset($_POST['cek17'])) { 
    for($i=0; $i < count($datta); $i++){
        if ($data[$i]['umur'] >= 17) {
?>
        <div class="center">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data[$i]['nama'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data[$i]['nis'] ?></h6>
                <p class="card-text"><?= $data[$i]['nama'] ?> adalah salah satu siswa SMK Wikrama
                dia ber umur <?= $data[$i]['umur'] ?> dan rombel <?= $data[$i]['rombel'] ?>
                </p>
            </div>
            </div>
        </div>
<?php 
}}}
?>
<!-- card end -->    <!-- card end -->   <!-- card end -->   <!-- card end -->   <!-- card end -->   <!-- card end -->   <!-- card end -->   
    
</body>
</html>