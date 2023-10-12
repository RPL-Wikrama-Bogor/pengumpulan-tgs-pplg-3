<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
        <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah buku</a>
        <br>
        <br>
        <div class="d-flex">
        <form action="<?= BASE_URL;?>/buku/cari" method="post" class= "d-flex" style="margin-right: 0.5rem;">
            <input type="text" name="cari" id="" class="form-control" style="border: solid 1px grey; margin-right: 0.5rem" placeholder="Cari...">
            <button type="submit" class="btn btn-succes" style="color: black; border: solid 1px grey;" ><i class="fa-solid fa-magnifying-glass">Cari</i></button>
        </form>
        <a href="<?= BASE_URL;?>/buku/index" class="btn btn-secondary" style="background-color: white ; color: red; border: solid 1px red;"><i class="fa-solid fa-rotate">Reset</i></a>
        </div>
        <br>
        <table class="table table-success table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama peminjam</th>
                    <th scope="col">Jenis barang</th>
                    <th scope="col">No barang</th>
                    <th scope="col">Tanggal pinjam</th>
                    <th scope="col">Tanggal kembali</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1;?>
            <?php foreach ($data['buku'] as $row) :?> 
                <tr>
                  <td><center><?= $no; ?></center></td>  
                  <td><?= $row['nama_peminjaman']; ?></td>  
                  <td><?= $row['jenis_barang']; ?></td>  
                  <td><?= $row['no_barang']; ?></td>  
                  <td><?= $row['tgl_pinjam']; ?></td>  
                  <td><?= $row['tgl_kembali']; ?></td>  
                  <td>
                    <?php
                        //strtotime untuk mengkonversi tanggal dan waktu
                        //tgl_kembali untuk menyimpan tanggal kembali yang diambil dari array asosiatif ($row) dengan nama kolom "tgl_kembali". strtotime() akan mengonversi string tanggal dari "tgl_kembali" 
                        //tgl_pinjam untuk menyimpan tanggal pinjam yang diambil dari array asosiatif ($row) dengan nama kolom "tgl_pinjam". Seperti $tgl_kembali, strtotime() juga digunakan di sini untuk mengonversi string tanggal dari "tgl_pinjam" menjadi timestamp.
                        $tgl_kembali = strtotime($row["tgl_kembali"]);
                        $tgl_pinjam = strtotime($row['tgl_pinjam']);

                        // Menghitung selisih hari antara tanggal kembali dan tanggal pinjam
                        $selisih_hari = floor(($tgl_kembali - $tgl_pinjam) / (60 * 60 * 24));

                        if ($selisih_hari == 0 || $selisih_hari == 1 || $selisih_hari > 2) {
                        // Jika tanggal kembali adalah pada tanggal yang sama atau 1 hari setelah tanggal peminjaman
                        echo '<div style="background-color: #3EC70B; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;">Sudah Kembali</div>';
                        } else {
                        // Jika tidak, maka belum kembali
                        echo '<div style="background-color: red; height: 1.7rem; text-align: center; color: white; margin-top: 0.5rem; border-radius: 7px;">Belum Kembali</div>';
                        }
                    ?>
                  </td> 
                  <td> 
                    <?php
                        //strtotime untuk mengkonversi tanggal dan waktu
                        //tgl_kembali untuk nyimpan tanggal kembali yang diambil dari array asosiatif ($row) dengan nama kolom "tgl_kembali". strtotime() akan mengonversi string tanggal dari "tgl_kembali" 
                        //tgl_pinjam untuk menyimpan tanggal pinjam yang diambil dari array asosiatif ($row) dengan nama kolom "tgl_pinjam". Seperti $tgl_kembali, strtotime() juga digunakan di sini untuk mengonversi string tanggal dari "tgl_pinjam" menjadi timestamp.
                        $tgl_kembali = strtotime($row["tgl_kembali"]);
                        $tgl_pinjam = strtotime($row['tgl_pinjam']);

                        //Menghitung selisih hari antara tanggal kembali dan tanggal pinjam
                        //floor digunakan dalam kode yang Anda berikan untuk membulatkan hasil perhitungan 
                        $selisih_hari = floor(($tgl_kembali - $tgl_pinjam) / (60 * 60 * 24));

                        if ($selisih_hari == 2 && $selisih_hari >= 2) {
                            // Menampilkan tautan edit hanya jika tanggal kembali bukan pada tanggal yang sama atau 1 hari setelah tanggal peminjaman
                            echo '<a href="' . BASE_URL . '/buku/edit/' . $row['ID'] . '" class="btn btn-primary"><i class="fa-solid fa-pen-to-square">Edit</i></a>';
                        }else
                            // echo echo '<a href="' . BASE_URL . '/buku/edit/' . $row['id'] . '" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>';
                    ?>
                        <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['ID'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');"><i class="fa-solid fa-trash">Hapus</i></a>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
</div>
