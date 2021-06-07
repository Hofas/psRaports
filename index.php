<?php
//ini_set('session.gc_maxlifetime', 3600);

session_start();
echo $_POST['login'];
echo $_POST['pass'];

?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>PsRaports</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">

            <p>Login:</p><input type="text" name="login">
            <p>Pass:</p><input type="password" name="pass">
            <input type="submit" value="LogIn">
        </form>
    </div>
</body>
</html>
