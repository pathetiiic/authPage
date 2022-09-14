<?php

    session_start(); // для использования супер-глобальной переменной $_SESSION
    require_once 'connect.php'; // подключение файла connect.php

    $login = $_POST['login'];
    $password = $_POST['password'];

    $checkUser = mysqli_query($connect, "SELECT * FROM `users`
                                               WHERE `login` = '$login'
                                               AND   `password` = '$password'"); // массив, который сравнивает введенные данные с данными в баще данных

    if(mysqli_num_rows($checkUser) > 0) { // если совпали, то

        $user = mysqli_fetch_assoc($checkUser); // преобразования в читабельный массив


        $_SESSION = [
            'id' => $user['id'],
            'fullName' => $user['full_name'],
            'avatar' => $user['avatar'],
            'email' => $user['email']
        ]; // массив с данными для вывода в верстке

        header('Location: ../profile.php'); // перенаправления в профиль

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль'; // выводит сообщение
        header('Location: ../auth.php'); // перенаправление в авторизацию
    }