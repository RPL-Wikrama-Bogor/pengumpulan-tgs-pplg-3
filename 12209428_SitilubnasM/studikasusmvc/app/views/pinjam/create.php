<div class="container">
    <h3 class="mb-3">Tambah Peminjam</h3>
    <form action="<?= BASE_URL; ?>/pinjam/simpanpinjam" method="post">
    <div class="class-body">
        <div class="form-group mb-3">
            <label for="nama_peminjam">Nama Peminjam: </label>
            <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_barang">Jenis Barang: </label>
            <select name="jenis_barang" id="jenis_barang" class="form-control">
                <option value="handphone">Handphone</option>
                <option value="laptop">Laptop</option>
                <option value="adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <!-- no_bar = nomer barang -->
            <label for="no_barang">Nomer Barang: </label>
            <input type="number" name="no_barang" id="no_barang" class="form-control">
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="tgl_pinjam">Tanggal Pinjam: </label>
        <input type="datetime-local" name="tgl_pinjam" id="tgl_pinjam" class="form-control">
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>