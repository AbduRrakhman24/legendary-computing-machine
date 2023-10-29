<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="header">
        <h1 class="logo"><a href="http://127.0.0.1/classWork/oneTask/" class="logo"><pre>Logo<br>   Picture</pre></a></h1>


<?php if (!isset($_SESSION['user'])) { ?>

        <form method="post" action="act.php">
            <input type="text" name="login" placeholder="login">
            <input type="password" name="password" placeholder="password">
            <button>Вход</button>
         </form>
<?php }
else {
    echo $_SESSION['user'];
} 
?>
    </div>
</body>
</html>