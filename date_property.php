<?php
//date(format,timestamp)--> y-m-d,H:i:s

date_default_timezone_set("Asia/Dhaka");
echo date("Y-m-d");
echo "<br>";
echo date("Y/m/d");
echo "<br>";
echo date("F,Y-m-d");
echo "<br>";
echo date("h:i:s A"); //time ap/pm ar jonno A
echo "<br>";

//date theke time ba bar ber kora
$day = date("l",strtotime(2025-07-13));

echo "July 13,2025 falls on: $day";

echo "<br>";

echo "Year: ".date("Y")."<br>";
echo "Month: ".date("F")."<br>";
echo "Day: ".date("d")."<br>";

//future date ber kora
$day1 = strtotime("+7 days");

echo "Day after 7 days: ".date("Y-m-d",$day1);

echo "<br>";

echo " Current TimeStamp:".time()."<br>";//1970 to present day porjnto total milisecond

echo " Converted Date to Timestamp ".date("Y-m-d h:i:s",1752399797)."<br>";// timestamp value diye date convert

//modify kora day,month and year 
$date = new DateTime();
$date->modify("+1 month");

echo " After 1 Month :".$date->format("Y-M-d");


?>