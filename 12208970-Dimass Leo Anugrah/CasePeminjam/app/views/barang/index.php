<div class="container">
    <h3 class="mb-3">Hasil Barang Yang Di Pinjam</h3>
    <br>
    <div class="d-flex justify-content-between">
        <a href="<?= BASE_URL; ?>/barang/tambah" class="btn btn-dark"><i class="las la-plus"> Peminjaman</i></a>
        <div class="d-flex">
        <form action="<?= BASE_URL; ?>/barang/cari" method="post" class="d-flex">
    <input type="text" class="form-control" name="search" placeholder="Cari Nama...">
    <button type="submit" class="btn btn-info"><i class="las la-search"></i></button>
</form>
        <a href="<?= BASE_URL ?>/barang/index/" class="btn btn-dark">Reset</a>
        </div>
    </div>
    <br>
    <table class="table table-hover" ">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">No Barang</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data['barang'] as $row) : ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $row['nama_peminjam'] ?></td>
            <td><?= $row['jenis_barang'] ?></td>
            <td><?= $row['no_barang'] ?></td>
            <td><?= $row['tgl_pinjam'] ?></td>
            <td><?= $row['tgl_kembali'] ?></td>
            <td>
                <?php if ($row['status'] == 'Sudah Kembali') {
                echo '<div class="btn btn-success text-white">Sudah Di Kembali</div>';
                } else {
                echo '<div class="btn btn-danger text-white">Belum Di Kembali</div>';
                }
                ?>
            </td>
            <td>
                <?php if ($row['status'] == 'Sudah Kembali') : ?>
                <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-info" onclick="return confirm('Yakin Anda Menghapus data?');"><i class="las la-trash"></i></a>
                <?php else : ?>
                <a href="<?= BASE_URL ?>/barang/edit/<?= $row['id'] ?>" class="btn btn-warning"><i class="las la-edit"></i></a>
                <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-info" onclick="return confirm('Yakin Anda Akan Menghapus data?');"><i class="las la-trash"></i></a>
                <?php endif; ?>
            </td>
            </tr>
        <?php $no++;
        endforeach; ?>

    </tbody>
  </table>
</div>