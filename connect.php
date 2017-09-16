<?php
    $connect_db = mysql_connect("localhost","userName","password") or die(mysql_error());
    $dbName = "dbName";
    if ( !$connect_db ) die ("Невозможно подключение к MySQL");
    mysql_select_db ( $db ) or die ("Невозможно открыть $db");
?>
