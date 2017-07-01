<?php

// SQL Setup
$user = 'root';
$password = 'root';
$db = 'main';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
$link,
$host,
$user,
$password,
$db,
$port
);

if ($success) {
    echo "Success!\n";
    var_dump($success);
}
