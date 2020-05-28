<?php
include '../../configDB.php';

$sql = "SELECT * FROM `projects`";
$results = mysqli_query($link, $sql);
$projects = mysqli_fetch_all($results, MYSQLI_ASSOC);

?><div class="projects_cell">
<?php foreach ($projects as $project) : ?>
    <div class="project">
        <div class="photo">
        
        </div>
        <div class="name">
            <?php $project['title']; ?>
        </div>
    </div>    
<? endforeach ?>
</div>
