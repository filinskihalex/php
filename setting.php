<?php
    
    
    $host = '176.53.162.84';
    $user = 'filinskih';
    $dbname = 'test';
    $port = '5432';
    $pwd = '!1711';
    $dbconnect = pg_connect ("host = $host port=$port dbname=$dbname user=$user password=$pwd ");
    if (!$dbconnect) {
        echo 'соединение не установленно';
        exit();
    } 
?>