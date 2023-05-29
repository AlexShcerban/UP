<?php

// Покупка билета

// Выравнивание по вертикали в кнопках и в индексном файле кнопка события***

// В индексном файле не работает имя вместо слова вход
// 404
//Заменить ссылки на кнопки с JS???
//Ширина в процентах
//Заголовки увеличить текст

    session_start();
    require_once 'config/connect.php';
    $news = mysqli_query($connect, "SELECT `id`, `name`, `date`, `photo`, `description` FROM `news`");
    $news = mysqli_fetch_all($news);

    $date = date('Y-m-d');

    $event = mysqli_query($connect, "SELECT `name`, `date` FROM `time-work` WHERE `date`>$date");
    $event = mysqli_fetch_all($event);


    $id = $_SESSION['id'];
    $a = mysqli_query($connect, "SELECT `level` FROM `accaunt` WHERE `id`=$id");
    $a = mysqli_fetch_all($a);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id = "header">
        <div class = "header_block">
            <a href="index.php" class = "header_button">Главная</a>
            <a href="html/time-work.php" class = "header_button">Купить билет</a>
            <a href="html/catalog.php" class = "header_button">Галерея</a>
            <a href="html/aboutUs.php" class = "header_button">О музее</a>
            <a href="html/login.php" class = "header_button" id = "header_signUp">Вход</a>
        </div>
    </div>

    <main>
        <div>
            <div class = "point">.</div>
            <div id = "index_pn_pt">
                <div id = "index_pn_pt_text">
                    ПН-ПТ 10:00-18:00 <br>
                    СБ-ВС выходной
                </div>
                <a href="html/time-work.php"><div class = "button" id = "index_pn_pt_button">Купить билет</div></a>
            </div>
            <!-- Первый блок -->
            <div class = "index_block_big">
                <div id = "index_info_1">
                    <div id = "index_text_1">
                        Ближайшее мероприятие
                    </div>
                    <div id = "index_text_2">
                        <?= $event[0][0] ?> (<?= $event[0][1] ?>)
                    </div>

                    <a href="html/time-work.php">
                        <div class = "button" id = "index_button_rospis">
                            Расписание мероприятий
                        </div>
                    </a>
                </div>

                <div id = "index_photo_1">
                    <img src="img/1_03.jpg" alt="фото музея 1" class = "index_photo_1_1">
                </div>
            </div>

            <!-- Второй блок -->
            <div class = "index_block_big">
                <div id = "index_info_2">
                    <div id = "index_text_3">
                        Местоположение музея
                    </div>
                    <div id = "index_text_4">
                        г. Барнаул,  ул. Крупская,  103
                    </div>

                    <a href="html/aboutUs.php">
                        <div class = "button" id = "index_button_map">
                            Посмотреть на карте
                        </div>
                    </a>
                </div>

                <div id = "index_photo_2">
                    <img src="img/1_02.jpg" alt="фото музея 1" class = "index_photo_1_1">
                </div>
            </div>
            <!-- Новости -->
            <div id = "index_news_text">Новости</div>
            <?php
                if($a[0][0] > 0){ ?>
                    <a href="html/create-news.php" style = "margin-left: 70%;">Создание новой новости</a>
                <?php }
                for($i = 0; $i < count($news); $i++){
            ?>
            <a href="html/news.php?id_news=<?= $news[$i][0] ?>">
                <div class = "index_block_news">
                    <img class = "index_photo_news" src="img/<?= $news[$i][3] ?>" alt="Фото новости">
                    <div class = "index_news_h1"><?= $news[$i][1] ?> (<?= $news[$i][2] ?>)</div>
                    <div class = "index_news_text_main">
                        <?= $news[$i][4] ?>
                    </div>
                </div>
            </a>
            <?php } ?>
            <div class = "point">.</div>
        </div>
    </main>
    <?php include "php/footer.php"; ?>
</body>
</html>