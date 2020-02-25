<?php
session_start();
require "config.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT *FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);

if ($jml > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header("Location: index.php");
} else {
    $error = true;
    echo "password salah";
}
 