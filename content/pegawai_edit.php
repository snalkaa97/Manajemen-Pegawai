<?php
if(!defined('INDEX')) die("");
$id_pegawai = $_GET['id'];
$query = mysqli_query($conn, "SELECT *FROM pegawai WHERE id_pegawai='$id_pegawai'");
$data = mysqli_fetch_array($query);
?>
<h2 class="judul">Edit</h2>
<form action="?hal=pegawai_update" method="post">
    <input type="hidden" name="id_pegawai" value="<?= $data['id_pegawai']; ?>">
    <div class="form-group">
        <label for="nama">Nama Pegawai</label>
        <div class="input">
            <input type="text" name="nama_pegawai" id="nama" value="<?= $data['nama_pegawai']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div class="input">
            <input type="date" name="tgl_lahir" id="tanggal" value="<?= $data['tgl_lahir']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
            <select name="jabatan" id="jabatan">
                <option value="<?= $data['nama_jabatan']; ?>">-Pilih Jabatan</option>
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
            <textarea name="keterangan" id="keterangan" cols="80%" rows="5" value="<?= $data['keterangan']; ?>"></textarea>
            <input type="submit" value="Simpan" class="tombol simpan">
            <input type="reset" value="Batal" class="tombol reset">
        </div>
    </div>
       
    </div>
</form>