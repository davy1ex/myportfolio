<?php
if ($_COOKIE['user'] != "admin") {
    header("Location: /admin/login.php");
}
echo "hello, " . $_COOKIE['user'];
echo "<hr>";

include("../configDB.php");
$sql = "SELECT * FROM `projects`";
$results = mysqli_query($link, $sql);
$projects = mysqli_fetch_all($results, MYSQLI_ASSOC);
// print_r($projects);

foreach ($projects as $project) {
    echo $project['title'] . ' ' . '<a href="' . '/admin/functions/remove_project.php?project_id=' . $project['id'] . '" . >x</a>' . ' ' . '<a href="'  . '/admin/edit_project.php?project_id=' . $project['id'] . '" . >edit</a>'; 
    echo "<br>";
}
?>

<form action="/admin/functions/add_project.php">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="photo" placeholder="photo">
    <input type="text" name="github" placeholder="github">
    <input type="text" name="description" placeholder="description">
    <button type="submit">add</button>
</form>

