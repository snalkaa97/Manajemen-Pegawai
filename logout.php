<?php
session_start();
session_destroy();
echo "<p>anda telah logout</p>";
header("Location: login.php");
?>