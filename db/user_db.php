<?php

// ユーザーtableへの接続
$conStr = 'mysql:dbname=ECSite;host=localhost;charset=utf8';
$usrName = 'root';
$usrPass = 'root';

$pdo = new PDO($conStr,$usrName,$usrPass);



?>
