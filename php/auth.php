<?php

    require_once '../config/connect.php';
    session_start();
    $accaunts = mysqli_query($connect, "SELECT `id`, `login`, `password` FROM `accaunt`");//получение данных
    $accaunts = mysqli_fetch_all($accaunts);//нормальный вид

    $b = 0;
    // Выход из аккаунта
    if($_GET["exit"] = 3){
        $_SESSION["id"] = 0;
    }
    // Создание аккаунта
    if($_GET["exit"] = 1){
        if(!empty($_GET["email"]) && !empty($_GET["password"]) && $_GET["norobot"]){
            $a = mysqli_query($connect, "SELECT `login`, `name` FROM `accaunt`");
            $a = mysqli_fetch_all($a);

            $log = $_GET["email"];
            $pas = $_GET["password"];
            $name = $_GET["name"];
            $options = ['cost' => 4];

            $pas = password_hash($pas, PASSWORD_BCRYPT, $options);
            for($i = 0; $i < count($a); $i++){ ///////////////////////////////////
                if($log == $a[$i][0]){
                    $b = 1;
                }
            }
            if($b == 0){
                mysqli_query($connect, "INSERT INTO `accaunt` (`id`, `name`, `level`, `login`, `password`) VALUES (NULL, '$name', 0, '$log', '$pas')");
                echo "yes";
            }
        }
    }

    //Вход в аккаунт
    if(!empty($_GET["email"]) && !empty($_GET["password"])){
        $log = $_GET["email"];
        foreach($accaunts as $accaunt) //////////////////////////
        {
            if($log === $accaunt[1]){
                $pas = $_GET["password"];
                if(password_verify($pas, $accaunt[2])){
                    $b == 2;
                    $_SESSION["id"] = $accaunt[0];
                    header('Location:../index.php');
                }
            }
        }
    }

    if($b == 1){
        header('Location:../html/login.php?acc=1');
    }
    else{
        header('Location:../html/login.php');
    }
    exit();

?>