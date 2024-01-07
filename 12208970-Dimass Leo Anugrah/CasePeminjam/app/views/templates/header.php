<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
  <title>Peminjaman</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&family=Noto+Serif+KR&family=Noto+Serif+NP+Hmong:wght@700&display=swap');
      body{
        font-family: 'Noto Sans JP', sans-serif;
      } 
</style>
</head>
<nav class="navbar navbar-expand-lg bg-primary mb-3">
  <div class="container">
    <a class="navbar-brand font-weight-bold text-warning" href="<?= BASE_URL ?>/home/index">INVENTARIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/home/index">Utama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>/barang/index/barang">Hasil Peminjaman</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body>