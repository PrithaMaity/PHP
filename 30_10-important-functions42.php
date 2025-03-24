<?php
$str="pritha maity";
echo strlen($str); //count string
echo "<br/>";

$var =true;
var_dump($var); // check data type
echo "<br/>";

echo date( "d"); // check date
echo "<br/>";

echo date("l"); //chech day(wednesday)
echo "<br/>";

echo date("m"); //check no of month
echo "<br/>";

echo date("M"); //check name of month
echo "<br/>";

echo date("F j, Y, g:i a"); //March 19, 2025, 4:27 am
echo "<br/>";

echo date("m.d.y"); //03.19.25 (date (m,d,y))
echo "<br/>";

echo date("j, n, Y"); //19, 3, 2025 (date (d,m,y))
echo "<br/>";

echo date("ymd"); //250319 (date(y,m,d))
echo "<br/>";

echo date('h-i-s, j-m-y, it is w Day'); //04-35-48(h-m-s), 19-03-25, 3531 3548(minsec) 3 Wedam25
echo "<br/>";

echo date('\i\t \i\s \t\h\e jS \d\a\y.'); //it is the 19th day.(date)
echo "<br/>";

echo date("D M j G:i:s T Y"); //Wed Mar 19 4:40:21 CET 2025
echo "<br/>";

echo date('H:m:s \m \i\s\ \m\o\n\t\h'); //04:03:13 m is month
echo "<br/>";

echo date("H:i:s"); //04:45:55
echo "<br/>";

echo date("Y-m-d H:i:s"); //2025-03-19 04:46:44 (date time)
echo "<br/>";

//echo phpinfo(); //check php version details
echo "<br/>";

echo is_string($str); //if it is string then it will return 1 otherwise nothing will be return
echo "<br/>";

$int =1837;
echo is_int($int); //if it is integer then it will return 1 otherwise nothing will be return
echo "<br/>";

echo rand();
echo "<br/>";

echo "before";
echo "<br/>";
 //die; //if you want to stop the code execution here use die
//exit(); //same usages like die

echo "after";
echo "<br/>";

$str1= "Hi! I'm Pritha maity";
echo substr($str1,8); //when you want a specific string, write no. of character after that you want (Pritha maity)
echo "<br/>";

echo substr($str1,-3); // if use - then it will return from last (ity)


?>