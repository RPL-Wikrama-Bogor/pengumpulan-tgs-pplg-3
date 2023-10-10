<div class="container">
    <h3 class="mb-3">Daftar Peminjaman </h3>
    <br>
    <div class="row">
        <div class="col-lg-6">
            <div class="d-flex justify-content-start align-items-center mb-3">
                <a href="<?= BASE_URL; ?>/pinjam/tambah" class="btn btn-primary">Tambah Peminjaman</a>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="d-flex justify-content-end align-items-center mb-3">
                <form action="<?= BASE_URL; ?>/pinjam/cari" method="post" class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data..." name="cari" id="cari" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="submit_cari">Cari</button>
                </form>

                <a href="<?= BASE_URL; ?>/pinjam/index" class="btn btn-outline-danger">Reset</a>
            </div>

        </div>
    </div>

    <table class="table table-striped table-bordered">
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
            <?php $no = 1; ?>
            <?php foreach ($data['pinjam'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jns_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?= $row['tgl_kembali']; ?></td>
                    <td>
                        <?php
                        if ($row['status_pinjam'] == "Belum Kembali") {
                            echo '<span class="badge bg-danger">Belum kembali</span>'; 
                        } else {
                            echo '<span class="badge bg-success">Sudah kembali</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($row['status_pinjam'] == "Belum Kembali") {
                            echo "<a href=" . BASE_URL . "/pinjam/edit/" .  $row['id'] . " class='btn btn-primary'>Edit</a>";
                        }
                        ?>
                        <a href="<?= BASE_URL ?>/pinjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>

                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>
