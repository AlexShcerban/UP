<?php
// 1. тег main с самого верха и до самого низа
// 2. можно ссылкой или лучше делать кнопки
// 3. Стоит ли делать публичный доступ к проекту и не боятся, что его украдут
// 4. Выравнивание по вертикали

//может быть открытие нового отдела

//Страница о нас******
//Вход и регистрация
//Новости***
//Покупка билета
//БД и php
//Надпись новости на главной странице***
//Создание новых экспонатов и экскурсий

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
    <div id = "header">
        <div class = "header_block">
            <a href="index.php" class = "header_button">Главная</a>
            <a href="html/time-work.php" class = "header_button">Купить билет</a>
            <a href="html/catalog.php" class = "header_button">Галерея</a>
            <a href="html/aboutUs.html" class = "header_button">О музее</a>
            <a href="index.php" class = "header_button" id = "header_signUp">Вход</a>
        </div>
    </div>

    <main>
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