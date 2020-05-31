<?php
if ($_POST['username'] != "") {
    include("../../configDB.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // make sql request\
    $sql = "SELECT * FROM `users` WHERE `username`='$username'";
    $result = mysqli_query($link, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user['password'] == md5($password)) {
        setcookie('user', $user['username'], time()+3600, "/");
        header("Location: /admin/index.php");

    }

    else {
        echo "bad password";
    }
    

}

else {
    $errors = array("input login");
    header("Location: /admin/login.php");
}