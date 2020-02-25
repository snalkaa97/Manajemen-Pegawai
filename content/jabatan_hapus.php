<?php
if(!defined('INDEX')) die("");
$id_jabatan=$_GET['id'];
$query=mysqli_query($conn,"DELETE FROM jabatan WHERE id_jabatan='$id_jabatan'");

if($query){
    echo "<script>alert('Berhasil dihapus'); </script>";
    header("Location: ?hal=jabatan ");
}
else{
    $error = true;
    echo mysqli_error();
}
?>