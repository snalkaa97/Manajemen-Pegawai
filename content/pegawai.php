<?php
if (!defined('INDEX')) die("");
?>
<h2 class="judul">Data Pegawai</h2>
<a href="?hal=pegawai_tambah" class="tombol">Tambah</a>
<table class="tabel">
    <thead>
        <tr>
            <th>No</th>
            <th>Id Pegawai</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($conn, "SELECT *FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
        $no = 0;
        while ($data = mysqli_fetch_array($query)) : $no++ ?>

        <tr>
            <td><?= $no; ?></td>
            <td><?= $data['id_pegawai']; ?></td>
            <td><?= $data['nama_pegawai']; ?></td>
            <td><?= $data['tgl_lahir']; ?></td>
            <td><?= $data['nama_jabatan']; ?></td>
            <td><?= $data['keterangan']; ?></td>
            <td><a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['id_pegawai']; ?>">Edit</a>
                <a class="tombol hapus" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai']; ?>">Hapus</a></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table> 