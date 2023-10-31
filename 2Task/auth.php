<?php

$log = $_POST['login'];
$pwd = $_POST['password'];

$user = json_decode(file_get_contents('user.json'), true);
$user[] = ['log' => $log, 'pwd' => $pwd];

file_put_contents('user.json', json_encode($user, JSON_PRETTY_PRINT));

header('location:index.php');
