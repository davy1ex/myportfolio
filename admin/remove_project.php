<?php 
include("../configDB.php");

// echo "gg" . $_GET['project_id'] . "!";

$sql = "DELETE FROM `projects` WHERE `id`=" . "'" . (int)$_GET['project_id'] . "'" ;
// echo $sql;
$result = mysqli_query($link, $sql);

if ($result) {
    header("Location: ./admin.php");
}