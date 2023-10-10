<div class="container">
    <h3 class="mb-3">Edit Peminjaman</h3>
    <form action="<?= BASEURL;?>/buku/updateBuku" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" value="<?= $data['buku']['nama_peminjam']?>">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Jenis Barang</label>
                <select name="jenis_barang" id="judul" class="form-control" value="<?= $data['buku']['jenis_barang']?>">
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor LAN">Adaptor LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Nomor Barang</label>
                <input type="text" name="no_barang" id="no_barang" class="form-control" value="<?= $data['buku']['no_barang']?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" name="tgl_pinjam" id="tgl_pinjam" class="form-control" value="<?= $data['buku']['tgl_pinjam']?>">
            </div>
        </div>
            <div class="form-group mb-3">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="datetime-local" name="tgl_kembali" id="tgl_kembali" class="form-control" value="<?= $data['buku']['tgl_kembali']?>">
            </div>
        </div>
        <div class="card-footer"><center>
            <button type="submit" class="btn btn-primary">Submit</button>
        </center>
        </div>
    </form>
</div>