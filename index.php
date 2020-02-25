<?php
session_start();
ob_start();
require "config.php";

if (!isset($_SESSION['login'])) {
    echo "<script>alert('login dulu');</script>";
    header("Location: login.php");
} else {
    define('INDEX', true);
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <header>Aplikasi Manajemen Pegawai</header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href=""><?= $_SESSION['username']; ?></a></li>
                <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
                <li><a href="?hal=pegawai">Data Pegawai</a></li>
                <li><a href="?hal=jabatan">Data Jabatan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>
        <section class="main">
            <?php require "konten.php"; ?>
        </section>
    </div>
    <footer>
        Copyright &copy; Syaifudin Alkatiri
    </footer>

</body>

</html> 