<?php         
    include("../configDB.php");

    if ($_COOKIE['user'] != "admin") {
        header("Location: /admin/login.php");
    }

    else {
        setcookie('user', $user['username'], time()-3600, "/");
        header("Location: /");
    }