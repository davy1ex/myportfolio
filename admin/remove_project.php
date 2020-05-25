<?php 
include("../configDB.php");

$sql = "DELETE FROM `projects` WHERE `id`=" . "'" . (int)$_GET['project_id'] . "'" ;
// echo $sql;
$result = mysqli_query($link, $sql);

if ($result) {
    header("Location: ./admin.php");
}