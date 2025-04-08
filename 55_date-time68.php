<?php
//you should be passed at least one parameter in this function
echo date('D-M-Y'); //day-month-year
echo "<br/>";
echo date("d / m / y" ); //date-month-year
echo "<br/>";

echo date_default_timezone_get(); //to check which country's time is currently set in default
echo date("h");
echo "<br/>";

date_default_timezone_set("Asia/Kolkata"); // set your local timezone 

//in 12 hours format
echo date("h:i:sa"); //hour:minute:second, a=pm/am
echo "<br/>";
echo date("H:i:s"); //in 24 hours format

echo "<br/>";
echo date("s"); //you can see only second

// for known about the date function in detail search on google's official website w3school by write "date function in php"
?>