<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="cssGeneral/media_style.css">
    <link rel="stylesheet" href="cssGeneral/media_style.css">
    <link rel="stylesheet" href="cssGeneral/navig.css">
    <link rel="stylesheet" href="cssGeneral/mainbll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="cssGeneral/button.css">
</head>

<body>      
          <div class="login-box">
          <?php
          if($_COOKIE['user']==''):

        ?>
        <h2>Авторизация</h2>
        <form action="php's/auth.php" method="post" autocomplete="off">
            <div class="user-box">
            <input type="text" name="login" id="login" required=""><br>
                <label>Имя</label>
            </div>
            <div class="user-box">
            <input type="password" name="pass" id="pass" required=""><br>
                <label>Пароль</label>
            </div>
            <button type="submit">Войти
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                </button>
                <?php else:?>
           <?php header('Location: /foradmin.php');?>
            <?php endif;?><br><br>
            <a href="Home.html">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Войти как пользователь
          </a>
        </form>
    </div>
</body>
</html>
