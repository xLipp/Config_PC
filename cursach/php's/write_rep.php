<?php
$compl= filter_var(trim($_POST['rep']),
FILTER_SANITIZE_STRING);

$mysql= new mysqli('localhost','root','','dbcomponents');
if(!$mysql){
    echo '<script language="javascript">';
    echo 'alert("Провал")';
    echo '</script>';
}
$mysql->query("INSERT INTO `complaints` (`text`)
VALUES('$compl')");

$mysql->close();

header('Location: /Report.html');
?>