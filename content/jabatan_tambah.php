<?php
if(!defined('INDEX')) die("");
?>
<h2 class="judul">Tambah Jabatan</h2>
<form action="?hal=jabatan_insert" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama" required>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>