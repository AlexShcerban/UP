<?php
    $connect = mysqli_connect ('localhost', 'root', '', 'UpCurs2');

    if(!$connect){
        die ('Ошибка БД');
    }
?>