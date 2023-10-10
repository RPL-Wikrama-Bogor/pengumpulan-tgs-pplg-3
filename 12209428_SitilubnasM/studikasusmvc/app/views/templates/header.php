<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <title>MVC - Studikasus</title>
</head>
<body>
    <div class="nav">
    <nav class="navbar navbar-expand-lg mb-2" style="margin-left: 60px;">
        <div class="container">
            <a class="navbar-brand" style="color:antiquewhite;"href="<?= BASE_URL ?>/home/index"><span>INVENTARIS</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color:antiquewhite;" href="<?= BASE_URL ?>/home/index"><span>Home</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:antiquewhite;" href="<?= BASE_URL ?>/pinjam/index"><span>Peminjaman</span></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </div>
