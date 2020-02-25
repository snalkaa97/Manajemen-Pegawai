<?php
session_start();
if (isset($_SESSION['login'])) {
    header("index.php");
}

require "config.php";
if (isset($_POST['daftar'])) {
    $nama = htmlspecialchars(strtoupper($_POST['nama']));
    $username = strtolower(stripcslashes($_POST['username']));
    $password = htmlspecialchars(md5($_POST['password']));
    $password2 = htmlspecialchars(md5($_POST['password2']));

    $cekusername = mysqli_query($conn, "SELECT *FROM user WHERE username='$username'");
    if (mysqli_fetch_array($cekusername)) {
        header("Location: register.php");
        $error_username = true;
        return false;
    }
    if ($password != $password2) {
        header("Location: register.php");
        return false;
    }
    $query = mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$username','$password')");
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrasi</title>
</head>

<body>
    <div class="container">
        <section class="login-box">
            <h2>Registrasi</h2>
            <form action="" method="post">
                <input type="text" name="nama" placeholder="Nama" required>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <?php if (isset($error_username)) : ?>
                <p class="error">username sudah terdaftar</p>
                <?php endif; ?>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="password" name="password2" placeholder="Konfirmasi Password">
                <input type="submit" name="daftar" value="Daftar">
            </form>
        </section>
    </div>
</body>

</html> 