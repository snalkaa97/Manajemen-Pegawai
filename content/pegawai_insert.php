<?php
if(!defined('INDEX')) die("");
//data
$nama_pegawai = $_POST['nama_pegawai'];
$tgl_lahir = $_POST['tgl_lahir'];
$id_jabatan = $_POST['jabatan'];
$keterangan = $_POST['keterangan'];

// //foto
// $foto = $_FILES['foto']['name'];
// $lokasi = $_FILES['foto']['tmp_name'];
// $tipe_file = $_FILES['foto']['type'];
// $ukuranfile = $_FILES['foto']['size'];
$query = mysqli_query($conn,"INSERT INTO pegawai SET nama_pegawai='$nama_pegawai',
                          tgl_lahir='$tgl_lahir',
                          id_jabatan='$id_jabatan',
                          keterangan='$keterangan'");
header("Location: ?hal=pegawai");
?>