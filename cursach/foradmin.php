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
              <li><a href="Library.html">Справка</a>
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
              <li><a href="assembl.php">Посмотреть сборки</a></li>
              <li><a href="Reg.html">Добавить администратора</a></li>
              <li><a href="index.php">Выйти</a>
              </li>
              </li>
            </ul>
          </nav>
</header>
<div class="mainblockk" style="width:100%;height:fit-content;">
  <h1>Панель администратора </h1><br>
  <img src="pics/Admin.png" width="30%" height="30%"/>
        </div>
</body>
</html>