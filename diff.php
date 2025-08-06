<?php
$date = new DateTime("1999-12-31");
$date1 = new DateTime("2025-07-13");

$diff = $date->diff($date1);



echo " difference : ".$diff->format('%y Years,%m Month,%d Day')."<br>"; //difference ber kora 
echo " Total days :".$diff->days."<br>"; //total day count




$now = new DateTime();
$olddate = new DateTime("2000-04-12");

$diff=$olddate->diff($now);
echo " Your Job Life is  : ".$diff->format('%y Years,%m Month,%d Day');

echo "<br>";
$time = new DateTime("2025-07-13 10:30:54");
$time1 = new DateTime("2025-07-13 15:35:20");

$diff = $time->diff($time1);

echo " difference : ".$diff->format('%d Days,%h Hour,%i Mnit,%s second');

echo "<br>";



$olddate = new DateTime("2024-04-12");
$now = new DateTime();

$diff = $now->diff($olddate);
if($diff->y >=1)
{
	echo"Yes! Time is More than 1 Year";
}
else
{
	echo"No! Time is Less than 1 Year";
}

?>