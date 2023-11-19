<?php
session_start();
require "dbconn/pdo.php";
require "function.php";
$name = $_POST['name'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];


if (trim(strlen($name) <= 3)){
 $_SESSION['message']  = "введите полное имя";
    redirect();
}
if  (trim(strlen($email) <5)){

    $_SESSION['message']  = "введите полный email";
    redirect();

}
if (trim(strlen($phone) < 10)){
    $_SESSION['message']  = "введите полный номер";
    redirect();
}


$pdo = getPDO();
$sql = 'SELECT * FROM test WHERE email=?';
$query = $pdo->prepare($sql);
$query->execute([$email]);
$user = $query->fetch();
$pdo = getPDO();
$sql = 'SELECT * FROM test WHERE phone=?';
$query = $pdo->prepare($sql);
$query->execute([$phone]);
$userp = $query->fetch();
if ($user && $userp) {
    echo  "формочка успешно отправлена";
}
else{
    $_SESSION['message'] = 'такого пользователя не существует';
    redirect();
}
