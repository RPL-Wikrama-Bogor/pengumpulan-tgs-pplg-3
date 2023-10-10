<div class="container">
    <h3 class="m-3">Daftar Buku</h3>
    <br>
    <div class="d-flex justify-content-between">
    <a href="<?= BASEURL;?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
    <div class="d-flex">
                <form action="<?= BASEURL; ?>/buku/cari" method="post" class="d-flex">
                        <input type="text" class="form-control" placeholder="Cari ..." name="search" id="seacrh" autocomplete="off">
                        <div class="input-group-apped">
                            <button class="btn btn-outline-secondary" type="submit" id="btncari">Cari</button>
                        </div>  
                    </form>

                    <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/buku/index/" id="btnreset">Reset</a>
            </div>
</div>
    <br>
    <br>
    <table class="table table=succsess table-striped table-bordered">
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
            <?php foreach ($data['buku'] as $row) :?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $row['nama_peminjam'];?></td>
                    <td><?= $row['jenis_barang'];?></td>
                    <td><?= $row['no_barang'];?></td>
                    <td><?= $row['tgl_pinjam'];?></td>
                    <td><?= $row['tgl_kembali'];?></td>
                    <!-- <td><?= $row['status'];?></td> -->
                    <td>
                    <?php
                        $tgl_kembali = strtotime($row["tgl_kembali"]);
                        $tgl_pinjam = strtotime($row['tgl_pinjam']);

                        // Menghitung selisih hari antara tanggal kembali dan tanggal pinjam
                        $selisih_hari = floor(($tgl_kembali - $tgl_pinjam) / (60 * 60 * 24));

                        if ($selisih_hari == 0 || $selisih_hari > 2) {
                        // Jika tanggal kembali adalah pada tanggal yang sama atau 1 hari setelah tanggal peminjaman
                        
                        ?>
                        <div style="background-color: #3EC70B; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;">Sudah Kembali</div> 
                        
                    </td>  
                    <td>
                        <a href="<?= BASEURL;?>/buku/hapus/<?= $row['id']?>" style="background-color: red; color:white;" class="btn" onclick="return confirm('Hapus data?')">Hapus</a>
                        <?php
                        } else {
                            // Jika tidak, maka belum kembali
                            ?>
                        <div style="background-color: red; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;">Belum Kembali</div>
                        
                    </td>  
                    <td>    
                        <a href="<?= BASEURL;?>/buku/edit/<?= $row['id']?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASEURL;?>/buku/hapus/<?= $row['id']?>" style="background-color: red; color:white;" class="btn" onclick="return confirm('Hapus data?')">Hapus</a>
                        <?php
                        }
                    ?>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>