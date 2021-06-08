<?php
//ini_set('session.gc_maxlifetime', 10);
session_start();

if ((isset($_POST['login']) && strlen($_POST['login'])>1) && (isset($_POST['pass']) && strlen($_POST['pass'])>1)) {
    require "db.php";
    $user = $_POST['login'];
    $pass = $_POST['pass'];

    $selectQuery = "SELECT * FROM users where login='${user}'";
    $result  = mysqli_query($db,$selectQuery);
    $row = mysqli_fetch_assoc($result);
    if ($row && password_verify($pass,$row['pass'])) {

        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;

        header("location: psReports.php");
        exit();
    } else {echo "Brak usera or bad pass";
        session_destroy();
    };

} else {echo "Proszę o Login oraz Pass dla PSreports";
    session_destroy();
}


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
