<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
</head>
<body>
    <?php 
        $project_id = $_GET['project_id'];
        include("../configDB.php");
        $sql = "SELECT * FROM `projects` WHERE `id`='$project_id'";
        $results = mysqli_query($link, $sql);
        $project = mysqli_fetch_assoc($results);
    ?>
    <form action="/admin/functions/update_project.php">
        <input type="text" name="project_id" value=<?php echo $project_id ?>>
        <div class="title">
            <div class="label">title</div>
            <div class="input"><input type="text" name="title"  value=<?php echo $project['title'] ?>></div>
        </div>

        <div class="photo">
            <div class="label">photo</div>
            <div class="input"><input type="text" name="photo" value=<?php echo $project['photo'] ?>></div>
        </div>
        
        <div class="github">
            <div class="label">github</div>
            <div class="input"><input type="text" name="github" value=<?php echo $project['github'] ?>></div>
        </div>

        <div class="description">
            <div class="label">description</div>
            <div class="input"><input type="text" name="description" value=<?php echo $project['description'] ?>></div>
        </div>
        
        <button type="submit">save</button>
    </form>
</body>
</html>