<?php

    session_start(); // начало сессии для вывода супер-глобальной переменной $_SESSION
    require_once 'connect.php'; // подключение файло connect.php

    $fullName = $_POST['fullName']; // полное имя
    $login = $_POST['login']; // логин
    $email = $_POST['email']; // почта
    $password = $_POST['password']; // пароль
    $passwordConfirm = $_POST['passwordConfirm']; // подтверждения пароля
    $avatar = $_FILES['avatar']['name']; // аватарка




    if ($password !== $passwordConfirm) { // если пароли не совпадают
        $_SESSION['message'] = 'пароли не совпадают'; // выводит сообщение
        header('Location: ../register.php'); // переводит на регистрацию
    }
    else {
        $path = 'uploads/' . time() . $_FILES['avatar']['name']; // путь в папку upload с уникальныи именем

        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) { // если неудалось зайгрузить файл
            $_SESSION['message'] = 'Пароли не совпадают'; // вывод сообщения
            header('Location: ../register.php'); // переводит на регистрацию
        } else {
            $_SESSION['message'] = 'Регистрация прошла успешно'; // выводит сообщение
            header('Location: ../auth.php'); // перенаправляет на авторизацию
        }




        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
                                      VALUES ('0', '$fullName', '$login', '$email', '$password', '$path')"); // зарегестрированные данные записываются в базу данных



    }
