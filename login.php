<?php
session_start();
if (isset($_SESSION['login'])) {
    header("index.php");
}

require "config.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT *FROM user WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    $result = mysqli_num_rows($query);
    //var_dump(mysqli_num_rows($query));

    if ($result > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['login'] = true;
        header("Location: index.php");
    }
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
    <title>Login Aplikasi</title>
</head>

<body>
    <div class="container">
        <section class="login-box">
            <h2>Login Aplikasi</h2>
            <?php if (isset($error)) : ?>
                <p class="error">Username atau Password salah</p>
            <?php endif; ?>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" id="username">
                <input type="password" name="password" placeholder="Password" id="password">
                <input type="submit" name="login" value="Login">
            </form>
        </section>
    </div>
</body>

</html>