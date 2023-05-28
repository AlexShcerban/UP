<?php
require_once '../config/connect.php';

$name = $_POST['name'];
$description = $_POST['description'];
$date = date('Y-m-d');

if(!empty($_FILES['photo'])){
    $file = $_FILES["photo"];
    $namef = $file['name'];
    $path = str_replace("\\", "/", __DIR__);
    $pathFile = "../img/" . $namef;
    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        $pathFile = "standart.png";
    }
}
mysqli_query($connect, "INSERT INTO `news` (`id`, `name`, `date`, `photo`, `description`) VALUES (NULL, '$name', '$date', '$namef', '$description')");

header('Location: ../index.php');
?>
