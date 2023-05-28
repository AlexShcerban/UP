<?php
    require_once "../config/connect.php";
    $id = $_GET["id_exhibit"];

    $exhibit = mysqli_query($connect, "SELECT `name`, `photo`, `description` FROM `exhibit` WHERE `id`=$id");
    $exhibit = mysqli_fetch_all($exhibit);

    $year = 1965;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экспонат</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <main>
        <a href="catalog.php"><div class = "button" id = "exhibit_button">Вернуться к каталогу</div></a>
        <div id = "exhibit_block">
            <img src="../img/<?= $exhibit[0][1] ?>" alt="музейный экспонат, <?= $exhibit[0][0] ?>" id = "exhibit_photo">
            <div id = "exhibit_text_1">
                Название: <?= $exhibit[0][0] ?><br>
             <!--   Возраст: <?= $name ?><br> -->
                Обнаружен: <?= $year ?> год<br>
            </div><br>
            <div id = "exhibit_text_2"><?= $exhibit[0][2] ?></div>
        </div>
    </main>
</body>
</html>