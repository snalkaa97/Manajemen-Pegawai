<?php
if(!defined('INDEX')) die("");
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$tgl_lahir = $_POST['tgl_lahir'];
$id_jabatan = $_POST['jabatan'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($conn, "UPDATE pegawai SET
                      id_pegawai='$id_pegawai',
                      nama_pegawai='$nama_pegawai',
                      tgl_lahir='$tgl_lahir',
                      keterangan='$keterangan',
                      id_jabatan='$id_jabatan' WHERE id_pegawai='$id_pegawai'");
if($query){
    echo "berhasil";
    header("Location: ?hal=pegawai");
}
else{
    echo "gagal";
}

?>