<?php session_start(); //  для использования супер-глобальной переменной $_SESSION ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
</head>
<body>

    <form>

        <img src="<?= $_SESSION['avatar'] ?>" alt="">   <!-- аватарка -->
        <h2><?= $_SESSION['fullName'] ?></h2>   <!-- полное имя -->
        <a href="#"> <?= $_SESSION['email']; ?> </a>    <!-- почта -->

    </form>

</body>
</html>