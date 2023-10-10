<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?= BASEURL; ?>/buku/simpanBuku" method="post">
        <div class="class-body">
        <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Jenis Barang</label>
                <select name="jenis_barang" id="judul" class="form-control">
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor LAN">Adaptor LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Nomor Barang</label>
                <input type="number" name="no_barang" id="no_barang" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" name="tgl_pinjam" id="tgl_pinjam" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>