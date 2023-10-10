<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?= BASEURL; ?>/buku/simpanBuku" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>