<?php
    require_once "../config/connect.php";
    session_start();
    $id = $_SESSION["id"];
    $exhibit = mysqli_query($connect, "SELECT `id`, `name`, `photo` FROM `exhibit`");
    $exhibit = mysqli_fetch_all($exhibit);

    $acc_level = mysqli_query($connect, "SELECT `level` FROM `accaunt` WHERE `id`=$id");
    $acc_level = mysqli_fetch_all($acc_level);

    $photo = "photo1";
    $name = "Шлем солдата";
    $count = 10;

    if($acc_level[0][0] > 0){
        $sotrudnik = 1;
    }

    $id_exhibit = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <main>
        <div id = "catalog_count_text">Всего <?= count($exhibit) ?> экспонатов</div>
        <?php if($sotrudnik){ ?>
            <a href="create.php"><div class = "button" id = "catalog_button">Добавить новый экспонат</div></a>
        <?php } ?>
        <div id = "catalog">
            <?php
            // Создание каталога
            for ($i=0; $i < count($exhibit); $i++) { 
            ?>
                <a href = "exhibit.php?id_exhibit=<?= $exhibit[0][0] ?>">
                    <div class = "catalog_unit">
                        <img src="../img/<?= $exhibit[0][2] ?>.png" alt="экспонат фото" class = "catalog_unit_photo">
                        <?= $exhibit[0][1] ?>
                    </div>
                </a>
            <?php } ?>
        </div>
    </main>
</body>
</html>