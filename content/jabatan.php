<?php
if(!defined('INDEX')) die("");
?>
<h2 class="judul">Data Jabatan</h2>
<a class ="tombol" href="?hal=jabatan_tambah">Tambah</a>
 <table class="tabel">
     <thead>
         <tr>
             <th>No</th>
             <th>Nama Jabatan</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php  
         $query = mysqli_query($conn,"SELECT *FROM jabatan ORDER BY id_jabatan DESC");
         $no=0;
         while($data = mysqli_fetch_array($query)){
             $no++;
         ?>
         <tr>
             <td><?php echo $no ?></td>
             <td><?= $data['nama_jabatan']; ?></td>
             <td><a class="tombol edit" href="?hal=jabatan_edit&id=<?= $data['id_jabatan']; ?>">Edit</a>
                 <a class="tombol hapus" href="?hal=jabatan_hapus&id=<?= $data['id_jabatan']; ?>">Hapus</a></td>
         </tr>
         <?php
         }
         ?>
     </tbody>
 </table>