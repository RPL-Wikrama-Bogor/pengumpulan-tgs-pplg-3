<div class="container">
    <h3 class="m-3">Daftar Buku</h3>
    <br>
    <a href="<?= BASEURL;?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
    <br>
    <br>
    <table class="table table=succsess table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">judul</th>
                <th scope="col">penulis</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['buku'] as $row) :?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $row['judul'];?></td>
                    <td><?= $row['penulis'];?></td>
                    <td><?= $row['tgl_selesai'];?></td>
                    <td>
                        <a href="<?= BASEURL;?>/buku/edit/<?= $row['id']?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASEURL;?>/buku/hapus/<?= $row['id']?>" class="btn btn-primary" onclick="return confirm('Hapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>