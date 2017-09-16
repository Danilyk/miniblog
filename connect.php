<?php
    $connect_db = mysql_connect("localhost","ci48734_test","qwerty") or die(mysql_error());
    $db = "ci48734_test";
    if ( !$connect_db ) die ("Невозможно подключение к MySQL");
    mysql_select_db ( $db ) or die ("Невозможно открыть $db");
?>