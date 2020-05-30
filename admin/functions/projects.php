<?php
include 'configDB.php';

$sql = "SELECT * FROM `projects`";
$results = mysqli_query($link, $sql);
$projects = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>
<div class="projects">
    <?php foreach ($projects as $project) : ?>
        <div class="project">
            <a href=<?php echo $project['github'] ?>><div class="image_preview"><img src=<?php echo "/media/" . $project['photo'] ?> alt=<?php echo $project['title'] ?>></div>        </a>
        </div>    
    <?php endforeach ?>
</div>
