<?php 
include("../../configDB.php");

$project_id = $_POST['project_id'];
$title = $_POST['title'];
$photo = $_FILES["userfile"]["name"];
$description = $_POST['description'];
$github = $_POST['github'];

$sql = "UPDATE `projects` SET `title`='$title', `photo`='$photo', `description`='$description', `github`='$github' WHERE `id`='$project_id'";
$result = mysqli_query($link, $sql);

if ($result) {
    header("Location: ../index.php");
}

else {
    echo "ERROR";
}