<?php
    $hostname = 'localhost';
    $username = 'fact2';
    $password = 123;
    $dbname = 'db_fact'; 
    $link = mysqli_connect($hostname, $username, $password, $dbname);
    mysqli_set_charset($link, 'utf8');
?>