<div class="container">
    <h3 class="mb -3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL; ?>/pinjam/simpan" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="judul">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
            </div>
            <div class="form-group mb-3">
                <label for="jns_barang">Jenis Barang</label>
                <select name="jns_barang" id="jns_barang" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Buku">Adaptor LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Nomor Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>