<?php 
include("../../configDB.php");

$project_id = $_GET['project_id'];
$title = $_GET['title'];
$photo = $_GET['photo'];
$description = $_GET['description'];
$github = $_GET['github'];

$sql = "UPDATE `projects` SET `title`='$title', `photo`='$photo', `description`='$description', `github`='$github' WHERE `id`='$project_id'";
$result = mysqli_query($link, $sql);

if ($result) {
    header("Location: ../admin.php");
}

else {
    echo "ERROR";
}