<?php
$login= filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass= filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass= md5($pass.";qfzxipre2345");

$mysql= new mysqli('localhost','root','','dbcomponents');

$result=$mysql->query("SELECT * FROM `users` WHERE `login` =
'$login' AND `pass` = '$pass'");
$user=$result->fetch_assoc();
if(count($user)==0){
    echo"Пользователь не найден";
    exit();
}

/*print_r($user); //Проверка нахождения пользователя
exit();*/

setcookie('user', $user['name'], time() + 5, "/");

$mysql->close();

header('Location: /index.php');
?>