<?php
session_start();

if (!(isset($_SESSION['user']))) {
    header("location: index.php");
    exit();
}
$user = $_SESSION['user'];
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
    <dev class="header">

        <div class="dump"></div><div class="title">Hej <?php echo $user?></div> <div class="logof"><input type="button" value="LogOff" id="logOffbtn"></div>


    </dev>

        <div class="content">

            <form id="cheks" action="createCsv.php" method="post">

             <div id="selectSection">

                <div class="selector" id="primarySelect">

             <span>
                <input type="checkbox" name="dumpCsv" value="name" id="name" checked="true" disabled="true">
                <label for="name">name</label>
            </span>

<!--            <span>-->
                <input type="checkbox" name="csv[]" value="name" id="name" checked="true" style="display: none">
<!--                <label for="name">name</label>-->
<!--            </span>-->

            <span>
                <input type="checkbox" name="csv[]" value="samaccountname" id="login">
                <label for="login">Login</label>
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
                <label for="dzial">Dzia??</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="title" id="title">
                <label for="title">Stanowisko</label>
            </span>
            <span>
                <input type="checkbox" name="csv[]" value="office" id="biuro">
                <label for="biuro">Biuro</label>
            </span>

            <span>
                <input type="checkbox" name="csv[]" value="lastlogondate" id="lastlogon">
                <label for="lastlogon">Last Logon</label>
            </span>

            </div>
                <div class="selector"id="altSelect">
            <span>
                <input type="checkbox" name="csv[]" value="managerEid" id="managerID">
                <label for="managerID">Numer personalny prze??o??onego</label>

            </span>
            <span>
                <input type="checkbox" name="csv[]" value="managerName" id="managerName">
                <label for="managerName">Prze??o??ony</label>

            </span>
            <span>
                <input type="checkbox" name="csv[]" value="managerlogin" id="managerLogin">
                <label for="managerLogin">Prze??o??ony Login</label>

            </span>
                </div>
                <div class="selector" id="dateFrom">
                    <input type="date" name="dateFrom" value="2021-01-01" id="datePick">
                    <label for="">Ostatnie Logowanie</label>
                </div>
                <div class="selector "id="ou">
                   <span>
                <input type="radio" name="ou" value="ouCentrala" checked="true">
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
    let logOffBtn = document.querySelector('#logOffbtn');
    logOffBtn.addEventListener('click',()=>{
        window.location.href ='logoff.php';
    })

</script>
</html>
