<?php

$serverName = 'db_mysql';
$userName = 'root';
$password = 'root';
$dbName = 'wp2017';

$link = mysqli_connect($serverName, $userName, $password);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

echo 'Suceefully';