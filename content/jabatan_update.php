<?php
if (!defined('INDEX')) die("");
$nama = $_POST['nama'];
$id_jabatan = $_POST['id_jabatan'];
$query = mysqli_query($conn, "UPDATE jabatan SET nama_jabatan='$nama' WHERE id_jabatan='$id_jabatan'");
if ($query) {
    header("Location: ?hal=jabatan");
} else {
    $error = true;
}
 