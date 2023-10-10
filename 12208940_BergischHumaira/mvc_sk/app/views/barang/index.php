<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
    <div class="row">
    <div class="col-lg-6">
        <div class="d-flex justify-content-start align-items-center mb-3">
            <a href="<?= BASE_URL; ?>/barang/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="d-flex justify-content-end align-items-center mb-3">
            <form action="<?= BASE_URL; ?>/barang/cari" method="post" class="input-group">
                <input type="text" class="form-control" placeholder="Cari data..." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
            </form>

            <form action="<?= BASE_URL; ?>/barang/reset" method="post">
                <button class="btn btn-outline-danger" type="submit" id="reset">Reset</button>
            </form>
        </div>
    </div>
</div>

    <table class="table  table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">No Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['barang'] as $row ) :?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $row['nama_peminjaman'];?></td>
                <td><?= $row['jenis_barang'];?></td>
                <td><?= $row['no_barang'];?></td>
                <td><?= $row['tgl_pinjam'];?></td>
                <td><?php  if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                    $tglKembali = new DateTime($row['tgl_pinjam']);
                                    $tglKembali->modify('+2 days');
                                    echo $tglKembali->format('Y-m-d H:i:s');
                            } else {
                                echo $row['tgl_kembali'];
                            } 
                    ?>
                </td>
                <td>
                    <?php if ($row['tgl_kembali'] ==  '0000-00-00 00:00:00') {
                                echo '<div class="btn btn-danger text-white" style="width: 100px; height: 23px; font-size: 10px; "><b>Belum Kembali</b></div>';
                            } else {
                                echo '<div class="btn btn-success text-white" style="width: 100px; height: 23px; font-size: 10px; "><b>Sudah Kembali</b></div>';
                            }   
                    ?>
                </td>
                <td>
                    <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') : ?>
                    <a href="<?= BASE_URL ?>/barang/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <?php endif; ?>
                    <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-danger" 
                    onclick="return confirm('Hapus data peminjaman ?')">Hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>