<?php
if ($_POST['username'] != "") {
    include("../configDB.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // make sql request\
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password` = '$password'";
    $result = mysqli_query($link, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        setcookie('user', $user['username'], time()+3600, "/");
        header("Location: ./admin.php");

    }
    

}

else {
    $errors = array("input login");
    // array_push($errors, "");
    header("Location: ./login.php");
}