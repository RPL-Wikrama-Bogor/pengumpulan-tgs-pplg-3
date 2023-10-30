<div class="container">
    <h3 class="mb-3">Peminjaman</h3>
    <form action="<?= BASE_URL;?>/buku/simpanBuku" method="post">
        <div class="form-group mb-3">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam">
        </div>
        <select class="form-control" name="jenis_barang" id="jenis_barang">
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>
        <div class="form-group mb-3">
            <label for="no_barang">Nomor Barang</label>
            <input type="number" class="form-control" name="no_barang" id="no_barang">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_pinjam">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" name="tgl_pinjam" id="tgl_pinjam">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
