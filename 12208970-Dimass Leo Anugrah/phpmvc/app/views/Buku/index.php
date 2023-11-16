<div class="container">
    <h3 class="mb-3">Daftar Buku</h3>
    <br>
    <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-dark">Tambah Buku</a>
    <br>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Action</th>
            </tr>
        </thead>


        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['buku'] as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['judul'];?></td>
                <td><?= $row['penulis'];?></td>
                <td><?= $row['tgl_selesai'];?></td>
                <td>
                    <a href="<?= BASE_URL; ?>/buku/edit/<?= $row['id'];?>" class="btn btn-info">Edit</a>
                    <a href="<?= BASE_URL; ?>/buku/hapus/<?= $row['id'];?>" class="btn btn-warning" onclick="return confirm('Hapus Data Buku?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>