<div class="container">
    <h3 class="mb-3">Edit : </h3>
    <form action="<?= BASE_URL; ?>/buku/updateBuku" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['buku']['id'];?>">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" value="<?= $data['buku']['nama_peminjam']?>">
            </div>
        <div class="form-group mb-3">
            <label for="jenis_barang">Jenis Barang</label>
            <select class="form-control" name="jenis_barang" id="jenis_barang">
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="penulis">Nomor Baranag</label>
            <input type="text" class="form-control" name="no_barang" id="no_barang" value="<?= $data['buku']['no_barang']?>">
        </div>  
        <div class="form-group mb-3">
            <label for="tgl_selesai">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?= $data['buku']['tgl_pinjam']?>">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_selesai">Tanggal Kembali</label>
            <input type="datetime-local" class="form-control" name="tgl_kembali" id="tgl_kembali" value="">
        </div>
        
    </div>
    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>