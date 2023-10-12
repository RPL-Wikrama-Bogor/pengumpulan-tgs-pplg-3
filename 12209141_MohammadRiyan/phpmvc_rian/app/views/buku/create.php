<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title mb-4">Tambah Buku</h3>
            <form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
                <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group mb-3">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>