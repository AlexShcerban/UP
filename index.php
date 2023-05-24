<?php
//может быть открытие нового отдела
    $time_work = "20.04 Экскурсия 'Самолеты ВОВ'";
    $photo = "photo1";
    $count = 3;
    $newsH1 = "Новые экспонаты";
    $textNews = "Сайт рыба текст поможет дизайнеру, верстальщику, веб мастеру генерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений.";
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
    <a href="html/time-work.php">Расписание</a>
    <main>
        <!-- Первый блок -->
        <div class = "index_block_big">
            <div id = "index_info_1">
                <div id = "index_text_1">
                    Ближайшее мероприятие
                </div>
                <div id = "index_text_2">
                    <?= $time_work ?>
                </div>

                <a href="html/time-work.php">
                    <div class = "button" id = "index_button_rospis">
                        Расписание мероприятий
                    </div>
                </a>
            </div>

            <div id = "index_photo_1">
                <img src="img/photo1.png" alt="фото музея 1" class = "index_photo_1_1">
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

                <a href="html/aboutUs.html">
                    <div class = "button" id = "index_button_map">
                        Посмотреть на карте
                    </div>
                </a>
            </div>

            <div id = "index_photo_2">
                <img src="img/photo1.png" alt="фото музея 1" class = "index_photo_1_1">
            </div>
        </div>
        <!-- Новости -->
        <div id = "index_news_text">Новости</div>
        <?php
            for($i = 0; $i < $count; $i++){
        ?>
        <a href="html/news.php">
            <div class = "index_block_news">
                <img class = "index_photo_news" src="img/<?= $photo ?>.png" alt="Фото новости">
                <div class = "index_news_h1"><?= $newsH1 ?></div>
                <div class = "index_news_text_main">
                    <?= $textNews ?>
                </div>
            </div>
        </a>
        <?php } ?>
    </main>
</body>
</html>