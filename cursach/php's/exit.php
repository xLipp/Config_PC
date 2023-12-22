<?php
setcookie('user', $user['name'], time() - 60, "/");
header('Location: /Home.html');
?>