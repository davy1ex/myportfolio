<?php 
include("../../configDB.php");

$title = $_GET['title'];
$photo = $_GET['photo'];
$description = $_GET['description'];
$github = $_GET['github'];

$sql = "INSERT INTO `projects` (`title`, `photo`, `description`, `github`) 
VALUES ('$title', '$photo', '$description', '$github')";
// echo $sql;
$result = mysqli_query($link, $sql);

if ($result) {
    header("Location: ../admin.php");
}

else {
    echo "ERROR";
}