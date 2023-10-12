<div class="container">
    <h3 class="mb-3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="nama_peminjaman">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjaman" autocomplete='off'>
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Peminjaman</label>
                <select class="form-control" id="jenis_barang" name="jenis_barang" autocomplete='off'>
                    <option value="">Pilih Jenis Barang >></option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor LAN">Adaptor LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Nomor Barang</label>
                <input type="text" class="form-control" id="no_barang" name="no_barang" autocomplete='off'>
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" autocomplete='off'>
            </div>
         
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</form>
