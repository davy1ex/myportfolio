<?php
echo "hello, " . $_COOKIE['user'];
echo "<hr>";

include("../configDB.php");
$sql = "SELECT * FROM `projects`";
$results = mysqli_query($link, $sql);
$projects = mysqli_fetch_all($results, MYSQLI_ASSOC);
// print_r($projects);

foreach ($projects as $project) {
    echo $project['title'] . ' ' . '<a href="' . '/admin/remove_project.php?project_id=' . $project['id'] . '" . >x</a>'; 
    echo "<br>";
}


?>

<form action="./add_project.php">
    <input type="text" name="title" placeholder="titile">
    <input type="text" name="title" placeholder="photo">
    <input type="text" name="title" placeholder="github">
    <input type="text" name="title" placeholder="description">
    <button type="submit">add</button>
</form>
