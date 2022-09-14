<?php session_start() // начало сессии для вывода супер-глобальной переменной $_SESSION ?>


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


    <form class="form" action="/vendor/singin.php" method="post"> <!-- форма, которая отправлет данные методом post в файл singin.php-->


        <label for="">Логин <input name="login" placeholder="Введите логин" type="text"></label>
        <label for="">Пароль <input name="password" placeholder="Введите пароль" type="password"></label>
        <button type="submit">Войти</button>

        <a href="/register.php">Зарестерируйтесь</a>

        <?php

        if($_SESSION['message']) {
            echo '<p class="mes">' . $_SESSION['message'] . ' </p>'; // выводит сообщение 'Неверный логин или пароль'
            unset($_SESSION['message']); // удаляет переменную после обноваления страницы
        }

        ?>
    </form>
    


</body>
</html>