<?php
    require_once '../config/connect.php';
    $accaunts = mysqli_query($connect, "SELECT `name`, `date`, `price` FROM `time-work`");//получение данных
    $accaunts = mysqli_fetch_all($accaunts);//нормальный вид

    $date = date('Y-m-d');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Купить билет</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <main>
        <div class = "button" id = "time_button_1">Купить билет</div>
        <table id = "time_table">
            <caption>Расписание</caption>
            <?php
                for ($i=0; $i < count($accaunts); $i++) { 
                    if($accaunts[$i][1] >= $date){
                        ?>
                        <tr>
                            <td><?= $accaunts[$i][1] ?></td>
                            <td>"<?= $accaunts[$i][0] ?>"</td>
                            <td><?= $accaunts[$i][2] ?> руб.</td>
                            <td><div class = "button time_table_button">Купить билет</div></td>
                        </tr>
            <?php }} ?>
        </table>
        <!-- Заказ экскурсии -->
        <form action="..php/buy.php" method="get" id = "time_form">
            <div id = "time_form_name">Заказать экскурсию</div>
            <div id = "time_form_field">
                <div>
                    <label for = "time">Дата</label><input type="date" name = "time" class = "form_text">
                    <br>
                    <label for = "human">Количество людей</label><input type="number" name = "human" class = "form_text">
                </div>
                <div id = "time_form_field_1">
                    <label for = "tema">Тема</label><input type="text" name = "tema" class = "form_text">
                    <br>
                    <label for = "tema">Доп. информация</label><input type="text" name = "info" class = "form_text">
                </div>
            </div>
            <br><br>
            <input type="submit" value="Заказать" class = "button" id = "time_form_button">
        </form>
    </main>
</body>
</html>