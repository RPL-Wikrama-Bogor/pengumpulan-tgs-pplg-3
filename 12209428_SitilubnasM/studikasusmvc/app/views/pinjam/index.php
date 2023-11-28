<div class="container">
    <br>
    <h3 class="mb-5">Daftar Peminjaman</h3>
    <div class="row">
        <div class="col-lg-6">
        <div class="d-flex justify-content-start align-items-center">
            <a href="<?= BASE_URL; ?>/pinjam/tambah" class="btn btn-primary">Tambah Pinjam</a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="d-flex justify-content-end align-items-center">
            <form action="<?= BASE_URL; ?>/pinjam/cari" method="post" class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" id="cari" placeholder="Cari...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="tombolcari" name="tombolcari">Cari</button>
                    </div>
                </div>
            </form>
            <form action="<?= BASE_URL; ?>/pinjam/reset" method="post">
                <button type="submit" class="btn btn-outline-danger ml-2" id="reset" name="reset">Reset</button>
            </form>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-light table-striped table-bordered">
        <thead>
            <tr class="table-danger">
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomer Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($data['pinjam'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam']; ?></td>
                <td><?= $row['jenis_barang']; ?></td>
                <td><?= $row['no_barang']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td>
                <?php
                    if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                        $tglKembali = new DateTime($row['tgl_pinjam']);
                        $tglKembali->modify('+2 days');
                        echo $tglKembali->format('Y-m-d H:i:s');
                    } else {
                        echo $row['tgl_kembali'];
                    } ?>
                </td>
                <td>
                    <?php
                    if($row['tgl_kembali'] == '0000-00-00 00:00:00' ){
                        echo '<button type="button" class="btn btn-danger" style="width: 120px;height:30px; font-size: 13px;">Belum kembali</button>';
                    }else{
                        echo '<button type="button" class="btn btn-success" style="width: 120px;height:30px; font-size: 13px;">Sudah kembali</button>';
                    }
                    ?>
                    </td>
                <td>
                    <?php if($row['tgl_kembali'] == '0000-00-00 00:00:00') : ?>
                    <a href="<?= BASE_URL ?> /pinjam/edit/ <?= $row['id']?>" class="btn btn-primary">Edit</a>
                    <?php endif ?>
                    <a href="<?= BASE_URL ?> /pinjam/hapus/ <?= $row['id']?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>


