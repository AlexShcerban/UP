<?php
    $registr = $_GET["registr"];
    // Здесь есть js, но он не работает
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
    <!-- Регистрация -->
    <main>
        <?php if(empty($registr)){ ?>
            <form action = "auth.php" method="get" name="frm" class = "login_block">
                <fieldset>
                    <label>Вход</label><br>
                    <input type="hidden" name="exit" value = "2">
                    <p>Email: <input type="text" name="email" maxLength = "20"></p>
                    <p>Пароль: <input type="password" name="password"  maxLength = "20"></p>
                    <input type="button" onclick="checkform()" value="Вход" class = "button">
                </fieldset>
            </form>
            <form action="" method="get" id = "logic_button">
                <input type="hidden" name="registr" value = "1">
                <input type="submit" value="Создать новый аккаунт" class = "button logic_button">
            </form>
        <?php } else{ ?>
            <!-- Регистрация -->
            <form action = "auth.php" method="get" name="frm1" class = "login_block">
                <fieldset>
                    <label>Регистрация</label><br>
                    <input type="hidden" name="exit" value = "1">
                    <p>Email: <input type="text" name="email" id=""  maxLength = "20"></p>
                    <p>Пароль: <input type="password" name="password" id="" maxLength = "20"></p>
                    Я не робот: <input type="checkbox" name="norobot" id=""><br><br>
                    <input type="submit" value="Регистрация" class = "button">
                </fieldset>
            </form>
            <form action="" method="get" id = "logic_button">
                <input type="submit" value="Уже есть аккаунт" class = "button">
            </form>
        <?php } ?>
    </main>
</body>
</html>