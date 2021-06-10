<?php

session_start();
$csv = "";
$datefrom = $_POST['dateFrom'];
$ou= $_POST['ou'];
foreach ($_POST['csv'] as $value) {

    $csv = $csv.$value.", ";

}
$csv = substr_replace($csv," ",-2);
$csv =  trim($csv);
$csvFile =  $csv.";".$datefrom.";".$ou;
file_put_contents('c:\tmp\psraport\psReport.csv',$csvFile);


