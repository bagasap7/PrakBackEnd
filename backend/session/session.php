<?php

session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

if (isset($_SESSION['username']) 
and isset($_SESSION['password'])) {
    echo "anda telah login";
    echo "<a href=\"logout.php\"><br> Logout</a>";
} else {
    echo "anda belum login";
}

?>
