<?php
session_start();
//array_push($_POST['csv'],'name');
$csv = "";
$datefrom = $_POST['dateFrom'];
$ou= $_POST['ou'];
foreach ($_POST['csv'] as $value) {

    $csv = $csv.$value.", ";

}
$csv = substr_replace($csv," ",-2);
$csv =  trim($csv);
$csvFile =  $csv.";".$datefrom.";".$ou;
//echo $csvFile;
header("location: done.php");
file_put_contents('c:\tmp\psraport\psReport.csv',$csvFile);


