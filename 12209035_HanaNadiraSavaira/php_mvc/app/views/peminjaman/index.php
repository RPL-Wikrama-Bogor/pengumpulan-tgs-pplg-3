<div class="container">
    <h3 class="mb-3">Daftar Peminjam</h3>
    <br>
    <div class="row mb-3">
        <div class="col-md-6">
            <a href="<?= BASE_URL; ?>/peminjaman/tambah" class="btn btn-primary mb-2">Tambah Peminjam</a>
        </div>
        <div class="col-md-6">
            <form action="<?= BASE_URL; ?>/peminjaman/cari" method="post" class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                        <button class="btn btn-outline-danger" type="submit" id="tombolCari">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-white table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['peminjaman'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam'] ?></td>
                    <td><?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                $tglKembali = new DateTime($row['tgl_pinjam']);
                                $tglKembali->modify('+2 days');
                                echo $tglKembali->format('Y-m-d H:i:s');
                            } else {
                                echo $row['tgl_kembali'];
                            } 
                        ?></td>
                        <td>
                            <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                echo "<div class='btn btn-danger font-bold'>Belum Kembali</div>";
                            } else {
                                echo "<div class='btn btn-success font-bold' id='sudahkembali'>Sudah Kembali</div>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') : ?>
                                <a href="<?= BASE_URL ?>/peminjaman/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                            <?php endif  ?>
                              <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" 
                        onclick="return confirm('Hapus data?');">Hapus</a>
                        </td>
                    </tr>
                <?php $no++; endforeach ?>
        </tbody>
    </table>
</div>