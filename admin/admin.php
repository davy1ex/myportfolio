<?php
echo "hello, " . $_COOKIE['user'];
echo "<hr>";

include("../configDB.php");
$sql = "SELECT * FROM `projects`";
$results = mysqli_query($link, $sql);
$projects = mysqli_fetch_all($results, MYSQLI_ASSOC);
// print_r($projects);

foreach ($projects as $project) {
    echo $project['title'] . "<br>";
}