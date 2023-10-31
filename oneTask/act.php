<?php


session_start();

$_SESSION['user'] = $_POST['login'];

header('location:index.php');

