<?php
if(!defined('INDEX')) die("");

$id_pegawai = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
header("Location: ?hal=pegawai");


?>