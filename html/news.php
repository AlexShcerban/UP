<?php
    $count = 0;
    $id = $_GET["id_news"];
    
    require_once '../config/connect.php';
    $new = mysqli_query($connect, "SELECT `name`, `date`, `photo`, `description` FROM `news` WHERE `id`=$id");
    $new = mysqli_fetch_all($new);

    $news = mysqli_query($connect, "SELECT `id`, `name`,`photo` FROM `news`");
    $news = mysqli_fetch_all($news);
    $count = count($news);
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
        <!-- Главная новость -->
        <a href="../index.php"><div class = "button" id = "exhibit_button">Вернуться к новостям</div></a>
        <div id = "exhibit_block">
            <div id = "news_name_1"><?= $new[0][0] ?></div>
            <img src="../img/<?= $new[0][2] ?>" alt="Музейный экспонат, <?= $new[0][0] ?>" id = "exhibit_photo">
            <div id = "exhibit_text_2"><?= $new[0][3] ?></div>

            <!-- Дополнительные новости -->
            <div id = "news_any_text"></div>
            <div id = "news_any">
                <?php if($count > 4){ $count = 4; }
                for ($i=0; $i < $count; $i++) { ?>
                    <a href="news.php?id_news=<?= $news[$i][0] ?>">
                        <div class = "news_any">
                            <img src="../img/<?= $news[$i][2] ?>" alt="Новости" class = "news_any_photo">
                            <div class = "news_any_text"><?= $news[$i][1] ?></div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>