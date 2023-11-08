<?php

$con = require 'connect.php';

$name = $_POST['name'];
$author = $_POST['author'];
$page_count = $_POST['page_count'];

$insrt = 'insert into books (name, author, page_count) values (?,?,?)';

$stmt = mysqli_prepare($con, $insrt);

mysqli_stmt_bind_param($stmt, 'sss', $name, $author, $page_count);

mysqli_stmt_execute($stmt);

header('location:index.php');