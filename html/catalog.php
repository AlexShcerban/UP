<?php
    $photo = "photo1";
    $name = "Шлем солдата";
    $count = 10;
    $sotrudnik = 1;
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
        <div id = "catalog_count_text">Всего <?= $count ?> экспонатов</div>
        <?php if($sotrudnik){ ?>
            <a href="create.php"><div class = "button" id = "catalog_button">Добавить новый экспонат</div></a>
        <?php } ?>
        <div id = "catalog">
            <?php
            // Создание каталога
            for ($i=0; $i < $count; $i++) { 
            ?>
                <a href = "exhibit.php?id_exhibit=<?= $id_exhibit ?>">
                    <div class = "catalog_unit">
                        <img src="../img/<?= $photo ?>.png" alt="экспонат фото" class = "catalog_unit_photo">
                        <?= $name ?>
                    </div>
                </a>
            <?php } ?>
        </div>
    </main>
</body>
</html>