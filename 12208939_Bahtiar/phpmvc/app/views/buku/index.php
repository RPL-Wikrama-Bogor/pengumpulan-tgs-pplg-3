<div class="container">
    <h3 class="mb-3">Daftar Buku</h3>
    <br>
    <a href="<?= BASE_URL; ?>"></a>
    <br>
    <br>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Aksi</th>
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
                    <a href="<?= BASE_URL; ?>/book/edit/<?= $row['id'];?>" class="btn btn-primary">Edit</a>
                    <a href="<?= BASE_URL; ?>/book/hapus/<?= $row['id'];?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>