<?php
if(!defined('INDEX')) die("");
?>
<h2 class="judul">Tambah Pegawai</h2>
<form action="?hal=pegawai_insert" method="post">
    <div class="form-group">
        <label for="nama">Nama Pegawai</label>
        <div class="input">
            <input type="text" name="nama_pegawai" id="nama">
        </div>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div class="input">
            <input type="date" name="tgl_lahir" id="tanggal">
        </div>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value="">-Pilih Jabatan</option>
                <?php
                    $query = mysqli_query($conn,"SELECT *FROM jabatan");
                    while($data = mysqli_fetch_assoc($query)): ?>
                    <option value="<?= $data['id_jabatan']; ?>"><?= $data['nama_jabatan']; ?></option>
                <?php endwhile;?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea style="width:100%" rows="5" name="keterangan" id="keterangan"></textarea>
            <input type="submit" value="Simpan" class="tombol simpan">
            <input type="reset" value="Batal" class="tombol reset">
        </div>
    </div>
       
    </div>
</form>