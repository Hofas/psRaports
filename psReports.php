<?php
session_start();

if (!(isset($_SESSION['user']))) {
    header("location: index.php");
    exit();
}

?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="psReports.css">
    <title>Document</title>
</head>
    <body>

        <div class="content">

            <form id="cheks" action="createCsv.php" method="post">

             <div id="selectSection">

                <div class="selector" id="primarySelect">

                <span>
                <input type="checkbox" name="csv[]" value="name" id="name">
                <label for="name">name</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="samaccountname" id="login">
                <label for="login">login</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="employeeid" id="Eid">
                <label for="Eid">Nr. Personalny</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="givenname" id="imie">
                <label for="imie">Imie</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="surname" id="nazwisko">
                <label for="nazwisko">Nazwisko</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="mail" id="mail">
                <label for="mail">Mail</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="officephone" id="telefon">
                <label for="telefon">Telefon</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="department" id="dzial">
                <label for="dzial">dział</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="title" id="title">
                <label for="title">Stanowisko</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="office" id="biuro">
                <label for="biuro">Biuro</label>
            </span>
            </div>
                <div class="selector"id="altSelect">
            <span>
                <input type="checkbox" name="csv[]" value="managerEid" id="managerID">
                <label for="managerID">Numer personalny przełożonego</label>

            </span>
            <span>
                <input type="checkbox" name="csv[]" value="managerName" id="managerName">
                <label for="managerName">Przełożony</label>

            </span>
            <span>
                <input type="checkbox" name="csv[]" value="managerlogin" id="managerLogin">
                <label for="managerLogin">Przełożony Login</label>

            </span>
                </div>
                <div class="selector" id="dateFrom">
                    <input type="date" name="dateFrom">
                    <label for="">Ostatnie Logowanie</label>
                </div>
                <div class="selector "id="ou">
                   <span>
                <input type="radio" name="ou" value="ouCentrala">
                <label>Centrala</label>

            </span>
                    <span>
                <input type="radio" name="ou" value="ouMarket">
                <label>Market</label>

            </span>
                </div>

            </div>

                <input id="submit" type="submit" value="Create Raport">

            </form>

        </div>

    </body>
<script>
    let submit = document.querySelector('#submit');


</script>
</html>
