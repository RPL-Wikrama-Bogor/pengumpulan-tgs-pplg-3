<div class="container">
    <h3 class="mb-3">Daftar Peminjam</h3>
    <br>
        <a href="<?=BASE_URL?>/peminjaman/tambah" class="btn btn-primary">Tambah Peminjam</a>
    <br>
    <br>
    <table class="table table-success table-striped table-bordered">
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
            <?php foreach ($data['peminjaman'] as $row) :?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam'];?> </td>
                    <td><?= $row['jenis_barang'];?> </td>
                    <td><?= $row['no_barang'];?> </td>
                    <td><?= $row['tgl_pinjam'];?> </td>
                    <td><?= $row['tgl_kembali'];?> </td>
                    <td>
                    <?php if (isset($_POST['submit'])) {
                    date_default_timezone_set('Asia/Jakarta');
                    $tgl_pinjam = $_POST['tgl_pinjam'];
                    $date = new DateTime($tgl_pinjam);
                    $date->add(new DateInterval('P2D'));
                    $tgl_kembali = $date->format('Y-m-d\TH:i:s'); }
                    $skrang= date('Y-m-d H:i:s'); ?>

                        <?php if ($skrang >= $row['tgl_kembali']) {
                            echo '<div class="btn btn-success text-white">Sudah Kembali</div>';
                        } else {
                            echo '<div class="btn btn-danger text-white">Belum Kembali</div>';
                        } ?>

                    </td>
                    <td>
                <?php
                if (isset($_POST['submit'])) {
                    date_default_timezone_set('Asia/Jakarta');
                    $tgl_pinjam = $_POST['tgl_pinjam'];
                    $date = new DateTime($tgl_pinjam);
                    $date->add(new DateInterval('P2D'));
                    $tgl_kembali = $date->format('Y-m-d\TH:i:s'); }
                    $skrang= date('Y-m-d H:i:s'); 
                
                if ($skrang >= $row['tgl_kembali']) : ?>
                <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Anda Menghapus data?');"><i class="las la-trash"></i>Hapus</a>
                <?php else : ?>
                <a href="<?= BASE_URL ?>/peminjaman/edit/<?= $row['id'] ?>" class="btn btn-primary"><i class="las la-edit"></i>Edit</a>
                <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Anda Akan Menghapus data?');"><i class="las la-trash"></i>Hapus</a>
                <?php endif; ?>
            </td>
                </tr>

                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>