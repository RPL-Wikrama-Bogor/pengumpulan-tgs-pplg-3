<div class="container">
    <h3 class="mb-3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL; ?>/barang/simpanbarang" method="post">
        <div class="form-group mb-3">
            <label for="">Nama Peminjam : </label>
            <input type="text" class="form-control" name="nama_peminjam" value="<?= $data['nama_peminjam_isi'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Jenis Barang : </label>
            <select name="jenis_barang" required class="form-control">
                <option value="Laptop" <?= $data['jenis_barang_isi'] == 'Laptop' ? 'selected' : '' ?>>Laptop</option>
                <option value="HP" <?= $data['jenis_barang_isi'] == 'HP' ? 'selected' : '' ?>>HP</option>
                <option value="AdaptorLAN" <?= $data['jenis_barang_isi'] == 'AdaptorLAN' ? 'selected' : '' ?>>Adaptor LAN</option>
            </select>
        </div>
            <div class="form-group mb-3">
            <label for="">Nomor Barang : </label>
            <input type="number" class="form-control" name="no_barang" min="0" value="<?= $data['no_barang_isi'] ?>">
        </div>
            <div class="form-group mb-3">
            <label for="">Tanggal Pinjam : </label>
            <input type="datetime-local" class="form-control" name="tgl_pinjam" value="<?= $data['tgl_pinjam_isi'] ?>">
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>