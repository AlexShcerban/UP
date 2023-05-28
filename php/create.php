<?php
require_once '../config/connect.php';

$name = $_POST['name'];
$description = $_POST['description'];


if(!empty($_FILES['photo'])){
    $file = $_FILES["photo"];
    $namef = $file['name'];
    $path = str_replace("\\", "/", __DIR__);
    $pathFile = "../img/" . $namef;
    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        $pathFile = $pathFile . "standart.png";
    }
}
mysqli_query($connect, "INSERT INTO `exhibit` (`id`, `name`, `photo`, `description`) VALUES (NULL, '$name', '$namef', '$description')");

header('Location: ../html/catalog.php');
?>
