<div class="container">
     <h3 class="mb-3">Daftar Buku</h3>
     <p class="badge bg-secondary text-wrap">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit sunt
          amet, beatae laudantium debitis sed ipsa, eveniet itaque nisi quia deleniti quos at pariatur aut nobis quaerat
          nihil facere, distinctio dolores quo nam? Alias, blanditiis veniam! Totam quibusdam neque unde!</p>
     <br>
     <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
     <br>
     <br>
     <table class="table table-success table-striped table-bordered">
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
               <?php $no = 1; ?>
               <?php foreach ($data['buku'] as $row) : ?>
               <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['penulis']; ?></td>
                    <td><?= $row['tgl_selesai']; ?></td>
                    <td>
                         <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                         <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger"
                              onclick="return confirm('Hapus data?')">Hapus</a>
                    </td>
               </tr>

               <?php $no++;
            endforeach; ?>
          </tbody>
     </table>
</div>