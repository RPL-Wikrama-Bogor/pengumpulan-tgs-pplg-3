<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="<?= BASE_URL ?>/img/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Profile Anda</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Nama: <?= $data['nama'] ?></li>
                        <li class="list-group-item">Pekerjaan: <?= $data['pekerjaan'] ?></li>
                    </ul>
                    <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
