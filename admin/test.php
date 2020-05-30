<form name="form1" action="test.php" enctype="multipart/form-data" method="post">
<input type="file" name="path" title="Выберите файл"/> </br>
</br>
<input type="submit" name="button" /> </br>
 
 
</body>
 
</html>
 
<?php
  $file = "../media/".$_FILES['path']['name'];
  move_uploaded_file($_FILES['path']['tmp_name'], $file);
  if(isset($_FILES['path']['name']))
  {
    echo "Загруженный файл: ".$_FILES['path']['name']."</br>";
    echo "Размер: ".$_FILES['path']['size']."байт";
}