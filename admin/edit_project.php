<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit project</h1>
    <?php         
        include("../configDB.php");

        if ($_COOKIE['user'] != "admin") {
            header("Location: /admin/login.php");
        }

        $project_id = $_GET['project_id'];

        $sql = "SELECT * FROM `projects` WHERE `id`='$project_id'";
        $results = mysqli_query($link, $sql);
        $project = mysqli_fetch_assoc($results);
    ?>
    <form action="/admin/functions/update_project.php" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="project_id" value=<?php echo $project_id ?>>
        <div class="title">
            <div class="label">title</div>
            <div class="input"><input type="text" name="title"  value=<?php echo $project['title'] ?>></div>
        </div>

        <div class="photo">
            <div class="label">photo</div>
            <!-- <div class="input"><input type="text" name="photo" value=<?php echo $project['photo'] ?>></div> -->
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <!-- Название элемента input определяет имя в массиве $_FILES -->
            <input name="userfile" type="file" />
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