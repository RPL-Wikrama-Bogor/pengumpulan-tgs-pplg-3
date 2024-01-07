<div class="container">
    <h3 class="mb-3">Edit Data : <?= $data['pinjam']['id'] ?></h3>
    <form action="<?= BASE_URL; ?>/pinjam/updatepinjam" method="post">
    <div class="class-body">
        <input type="hidden" name="id" value="<?= $data['pinjam']['id']; ?>">
        <div class="form-group mb-3">
            <label for="nama_peminjam">Nama Peminjam: </label>
            <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" value="<?= $data['pinjam']['nama_peminjam']?>">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_barang">jenis Barang: </label>
            <select name="jenis_barang" id="jenis_barang" class="form-control" value="<?= $data['pinjam']['jenis_barang']?>">
                <option value="handphone">Handphone</option>
                <option value="laptop">Laptop</option>
                <option value="adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <!-- no_bar = nomer barang -->
            <label for="no_barang">Nomer Barang: </label>
            <input type="number" name="no_barang" id="no_barang" class="form-control" value="<?= $data['pinjam']['no_barang']?>">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_pinjam">Tanggal Pinjam: </label>
            <input type="datetime-local" name="tgl_pinjam" id="tgl_pinjam" class="form-control" value="<?= $data['pinjam']['tgl_pinjam']?>">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_kembali">Tanggal Kembali: </label>
            <input type="datetime-local" name="tgl_kembali" id="tgl_kembali" class="form-control" value="<?= $data['pinjam']['tgl_kembali']?>">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>