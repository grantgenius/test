<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#phone").mask("+7(999) 99-99-999");
        });
    </script>
</head>
<body class = "bg-dark">

<div class="container mt-5">
    <?php

    if (isset ($_SESSION['message']))
    {
        echo '<p class="msg">'. $_SESSION['message']  .'</p>';
    }
    unset($_SESSION['message']);
    ?>
    <form  action="test1.php" method="post">
    <h1 style="color: white">Форма</h1>
        <div>
            <label for="name">введите имя</label>
        <input type="text" name="name" id="name" class="form-control" required><br>
        </div>

        <div>
            <label class="form-label" for="email">введите email</label>
        <input type="email" name="email" id="email" class="form-control" required><br>
        </div>

        <div>
            <label for="number">введите номер</label>
        <input type="text" name="phone" id="phone" class="form-control" required><br>
        </div>

        <div>
        <button type="submit" class="btn btn-success">Отправить</button>
        </div>
        </div>

    </form>
</div>
</body>
</html>

<style>
    p{
        color: red;
    }
    label {
        color: white;
    }
</style>
