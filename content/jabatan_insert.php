<?php
if (!defined('INDEX')) die("");
$nama_jabatan = $_POST['nama'];
$query = mysqli_query($conn, "INSERT INTO jabatan SET nama_jabatan='$nama_jabatan'");
if ($query) {
    echo "<script>alert('Data berhasil disimpan!');</script>";
    header("Location: ?hal=jabatan");
} else {
    $error = true;
}
 