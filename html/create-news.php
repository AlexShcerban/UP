<?php

require_once '../config/connect.php';

?>


<!doctype html>
<html lang = "en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset = "UTF-8">
    <title>Создание новой новости</title>
</head>
<body>

<?php include "../html/header.php" ?>

    <main>
        <div id = "create_h1">Создание новой новости</div>
        <!-- Создание данных -->
        <form action="../php/create-new.php" method="post" id = "create_form" enctype = "multipart/form-data">
            <div class = "create_field">
                <label for="">Название</label>
                <input type="text" name = "name"><br>
            </div>
            <div class = "create_field">
                <label for="">Текст</label>
                <textarea name="description" ></textarea><br>
            </div>
            <div class = "create_field">
                <input type="file" name="photo">
            </div>
            <br><br>
            <button type = "submit" class = "button create_field" id = "create_button">Готово</button>
        </form>
    </main>
</body>
</html>