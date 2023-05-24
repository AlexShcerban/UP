<?php
    $count = 5;
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
    <main>
        <div class = "button" id = "time_button_1">Купить билет</div>
        <table id = "time_table">
            <?php
                for ($i=0; $i < $count; $i++) { 
            ?>
            <tr>
                <td>20.04</td>
                <td>Экскурсия</td>
                <td>"Танки ВОВ"</td>
                <td>150 руб.</td>
                <td><div class = "button time_table_button">Купить билет</div></td>
            </tr>
            <?php } ?>
        </table>
        <form action="..php/buy.php" method="get" id = "time_form">
            <div id = "time_form_name">Заказать экскурсию</div>
            <label for = "time">Время</label><input type="text" name = "time" class = "form_text">
            <label for = "human">Количество людей</label><input type="number" name = "human" class = "form_text">
            <br>
            <label for = "tema">Тема</label><input type="text" name = "tema" class = "form_text">
            <br><br>
            <input type="submit" value="Отправить" class = "button" id = "time_form_button">
        </form>
    </main>
</body>
</html>