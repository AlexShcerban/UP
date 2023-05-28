<?php
    require_once "../config/connect.php";
    session_start();
    $id = $_SESSION["id"];

    if($id > 0){
        $accaunt = mysqli_query($connect, "SELECT `name` FROM `accaunt` WHERE `id`=$id");
        $accaunt = mysqli_fetch_all($accaunt);
        $name = $accaunt[0][0];
    }else{
        $name = "Вход";
    }
?>


<div id = "header">
    <div class = "header_block">
        <a href="../index.php" class = "header_button">Главная</a>
        <a href="time-work.php" class = "header_button">Купить билет</a>
        <a href="catalog.php" class = "header_button">Галерея</a>
        <a href="aboutUs.php" class = "header_button">О музее</a>
        <a href="login.php" class = "header_button" id = "header_signUp"><?= $name ?></a>
    </div>
</div>