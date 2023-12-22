
<?php
$nname= filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email= filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$mboard= filter_var(trim($_POST['board']),
FILTER_SANITIZE_STRING);
$cpu= filter_var(trim($_POST['proc']),
FILTER_SANITIZE_STRING);
$grcard= filter_var(trim($_POST['card']),
FILTER_SANITIZE_STRING);
$rram= filter_var(trim($_POST['ram']),
FILTER_SANITIZE_STRING);
$harddrive= filter_var(trim($_POST['hard']),
FILTER_SANITIZE_STRING);
$pows= filter_var(trim($_POST['power']),
FILTER_SANITIZE_STRING);
$cooler= filter_var(trim($_POST['cool']),
FILTER_SANITIZE_STRING);
$body= filter_var(trim($_POST['box']),
FILTER_SANITIZE_STRING);
$monitor= filter_var(trim($_POST['moni']),
FILTER_SANITIZE_STRING);
$mouse= filter_var(trim($_POST['mous']),
FILTER_SANITIZE_STRING);
$keyboard= filter_var(trim($_POST['keyb']),
FILTER_SANITIZE_STRING);
$comm= filter_var(trim($_POST['resume']),
FILTER_SANITIZE_STRING);

/*if(($mboard)!="GIGABYTE Z590 GAMING X" ||
 ($mboard)!="GIGABYTE B460M DS3H V2" || ($mboard)!="Gigabyte H410M"){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($cpu)=="Intel Core i3-10100F" 
|| ($cpu)=="Intel Core i5-10400F" || ($cpu)=="Intel Core i7-10700F"){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($grcard)=="Palit GeForce RTX 4070 Ti GamingPro" ||
 ($grcard)=="ASUS GeForce RTX 3050 Dual OC Edition" || ($grcard)=="GEFORCE GTX 1660 SUPER 6Гб"){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($rram)=="Kingston HyperX FURY Black 8 ГБ" ||
 ($rram)=="G.Skill TRIDENT Z RGB 16 ГБ" || ($rram)=="TOUGHRAM 8 ГБ"){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($harddrive)=="Toshiba P300 1 ТБ" ||
 ($harddrive)=="Seagate BarraCuda 2 ТБ" || ($harddrive)=="WD Red IntelliPower 4 ТБ"){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($pows)=="be quiet! Pure Power 11 500W" ||
 ($pows)=="ZALMAN MegaMax 600 W" || ($pows)=="Corsair CX750M 750 W"){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($cooler)<1 || ($cooler) > 3){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($body)<1 || ($body) > 3){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($monitor)<1 || ($monitor) > 3){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($mouse)<1 || ($mouse) > 3){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
else if(($keyboard)<1 || ($keyboard) > 3){
    echo '<script language="javascript">';
    echo 'alert("Неверный ввод компонента")';
    echo '</script>';
    exit();
}
 else if(mb_strlen($nname)<2 || mb_strlen($nname) > 50){
    echo '<script language="javascript">';
    echo 'alert("Недопустимая длина имени")';
    echo '</script>';
    exit();
} else if(mb_strlen($comm) > 200){
    echo '<script language="javascript">';
    echo 'alert("Недопустимая длина имени")';
    echo '</script>';
    exit();
} */

$pass= md5($pass.";qfzxipre2345");

$mysql= new mysqli('localhost','root','','dbcomponents');
if(!$mysql){
    echo '<script language="javascript">';
    echo 'alert("Провал")';
    echo '</script>';
}
$mysql->query("INSERT INTO `assembling` (`user`, `mail`, `modelmotherboard`, `modelprocessor`, `modelvideocard`, `modelram`,
 `modelharddrive`, `modelpowerunit`, `modelcoolingsystem`, `modelbody`, `modelscreen`, `modelmouse`, `modelkeyboard`, `comments`)
VALUES('$nname', '$email', '$mboard', '$cpu', '$grcard', '$rram', '$harddrive', '$pows', '$cooler', '$body', '$monitor', '$mouse', '$keyboard', '$comm')");

$mysql->close();

header('Location: /Create.html');
     ?>