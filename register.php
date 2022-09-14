<?php
    session_start();  // для использования супер-глобальной переменной $_SESSION
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация и Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<form class="form" action="vendor/signup.php" method="post" enctype="multipart/form-data"> <!-- переводит в signup.php; $_FILES enctype="multipart/form-data" для загрузки вайло -->


    <label for="">ФИО <input name="fullName" placeholder="Введите ФИО" type="text"></label>
    <label for="">Логин <input name="login" placeholder="Введите логин" type="text"></label>

    <label for="">Почта <input name="email" placeholder="Введите адресс почты" type="email"></label>

    <label for="">Вставте картинку <input name="avatar" type="file"></label>

    <label for="">Пароль <input name="password" placeholder="Введите пароль" type="password"></label>
    <label for="">Подвердите пароль <input name="passwordConfirm" placeholder="Введите пароль еще раз" type="password"></label>

    <button type="submit">Регистрация</button>

    <a href="/auth.php">Войти</a>

    <?php

        if($_SESSION['message']) {
            echo '<p class="mes">' . $_SESSION['message'] . ' </p>'; // вывод сообщения
            unset($_SESSION['message']);
        }

    ?>





</form>



</body>
</html>