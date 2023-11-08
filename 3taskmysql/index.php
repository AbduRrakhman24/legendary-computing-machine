<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label>Name
        <input type="text" name= "name">
        </label>
        <label>Author
        <input type="text" name="author">
        </label>
        <label>Page_count
        <input type="text" name="page_count">
        </label>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>

<?php
$con = require 'connect.php';

$slt = 'SELECT * FROM books';

$query = mysqli_query($con, $slt);

while ($get = mysqli_fetch_assoc($query)) {
   echo $get['id'] .' - '. $get['name'] .' - '. $get['author'] .' - '. $get['page_count'] . '<br>';
};
