<?php
$mysql= new mysqli('localhost','root','','dbcomponents');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Обычный textarea — <textarea> — Дока</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="cssGeneral/media_style.css">
    <link rel="stylesheet" href="cssGeneral/media_style.css">
    <link rel="stylesheet" href="cssGeneral/navig.css">
    <link rel="stylesheet" href="cssGeneral/mainbll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header>
<nav>
            <ul class="topmenu">
              <li><a href="foradmin.php">Главная</a></li>
              <li><a href="index.php">Справка</a>
                 <ul class="submenu">
              <li><a href="Mplata.html">Материнская плата</a></li>
               <li><a href="Proc.html">Процессор</a></li>
               <li><a href="Vidcard.html">Видеокарта</a></li>
               <li><a href="Ozu.html">ОЗУ</a></li>
               <li><a href="HarDrive.html">Жёсткий диск</a></li>
               <li><a href="Energy.html">Блок питания</a></li>
               <li><a href="Cold.html">Система охлаждения</a></li>
               <li><a href="Box.html">Корпус</a></li>
               <li><a href="Monitor.html">Монитор</a></li>
               <li><a href="Mouse.html">Мышь</a></li>
               <li><a href="Keyboard.html">Клавиатура</a></li>
               </ul>
              <li><a href="foradmin.php">Посмотреть сборки</a></li>
              <li><a href="Reg.html">Добавить администратора</a>
              <li><a href="index.php">Выйти</a>
              </li>
              </li>
            </ul>
          </nav>
</header>
<div class="mainblockk" style="height:fit-content;margin-top:10%;line-height: 1.9;">
  <h1>Сборки от других пользователей </h1>
 <?php $result=mysqli_query($mysql,"SELECT * FROM `assembling`");

while($comp=mysqli_fetch_assoc($result)){
  echo"- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -";
  echo"<br>";
  echo"Заявка №";
  echo $comp['idassemblingg'];
  echo"<br>";
  echo $comp['user'];
  echo":";
  echo $comp['mail'];
  echo"<br>";
  echo"Материнская плата:";
  echo $comp['modelmotherboard'];
  echo"<br>";
  echo"Процессор:";
  echo $comp['modelprocessor'];
  echo"<br>";
  echo"Видеокарта:";
  echo $comp['modelvideocard'];
  echo"<br>";
  echo"Оперативная память:";
  echo $comp['modelram'];
  echo"<br>";
  echo"Жёсткий диск:";
  echo $comp['modelharddrive'];
  echo"<br>";
  echo"Блок питания:";
  echo $comp['modelpowerunit'];
  echo"<br>";
  echo"Система охлаждения:";
  echo $comp['modelcoolingsystem'];
  echo"<br>";
  echo"Корпус:";
  echo $comp['modelbody'];
  echo"<br>";
  echo"Монитор:";
  echo $comp['modelscreen'];
  echo"<br>";
  echo"Мышь:";
  echo $comp['modelmouse'];
  echo"<br>";
  echo"Клавиатура:";
  echo $comp['modelkeyboard'];
  echo"<br>";
  echo"Комментарий:";
  echo $comp['comments'];

  echo"<br>";
}
?>
        </div>
</body>
</html>