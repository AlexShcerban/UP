<?php
require_once '../config/connect.php';

$time = $_POST['time'];
$price = $_POST['price'];
$name = $_POST['tema'];

mysqli_query($connect, "INSERT INTO `time-work` (`id`, `name`, `date`, `price`) VALUES (NULL, '$name', '$time', '$price')");

header('Location: ../html/time-work.php');
?>
