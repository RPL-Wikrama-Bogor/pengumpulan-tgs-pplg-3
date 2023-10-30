<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3 class="mb-3">Tambah buku</h3>
        <form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
        <div class="class=body">
            <div class="form-group mb-3">
                <label for="judul">judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group mb-3">
                <label for="judul">penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">judul</label>
                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</body>
</html>