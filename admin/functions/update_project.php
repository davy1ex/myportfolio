<?php 
$target_dir = "../../media/";
$target_file = $target_dir . $_FILES["userfile"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["userfile"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["userfile"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 

else {
  
    move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);
    echo "gg";
    include("../../configDB.php");

    $project_id = $_POST['project_id'];
    $title = $_POST['title'];
    $photo = $_FILES["userfile"]["name"];
    $description = $_POST['description'];
    $github = $_POST['github'];

    $sql = "UPDATE `projects` SET `title`='$title', `photo`='$photo', `description`='$description', `github`='$github' WHERE `id`='$project_id'";
    $result = mysqli_query($link, $sql);

    if ($result) {
        header("Location: ../index.php");
    }

    else {
        echo "ERROR";
    }
}



