<?php
if(!defined('INDEX')) die("");

$query=mysqli_query($conn,"SELECT *FROM jabatan WHERE id_jabatan='$_GET[id]'");
$data=mysqli_fetch_array($query);
?>
<h2 class="judul">Edit Jabatan</h2>
<form action="?hal=jabatan_update" method="post">
    <input type="hidden" name="id_jabatan" value="<?= $data['id_jabatan']; ?>">
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama" value="<?= $data['nama_jabatan']; ?>">
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="tombol simpan" value="Simpan">
        <input type="reset" class="tombol reset" value="Batal">
    </div>
</form>