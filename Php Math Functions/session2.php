<?php
//Integer Max Function
echo(max(2,4,6,8,10) . "<br>");
echo(max(22,14,68,18,15) . "<br>");
echo(max(array(4,6,8,10)) . "<br>");
echo(max(array(44,16,81,12)) . "<br>");
echo(max(34,56,108,76,91) . "<br>");
//Integer min Function
echo(min(2,4,6,8,10) . "<br>");
echo(min(22,14,68,18,15) . "<br>");
echo(min(array(4,6,8,10)) . "<br>");
echo(min(array(44,16,81,12)) . "<br>");
echo(min(34,56,108,76,91) . "<br>");
//math pi() function
echo(pi());
//math absolute value abs() function
echo(abs(6.7) . "<br>");
echo(abs(-6.7) . "<br>");
echo(abs(-3) . "<br>");
echo(abs(3));
//math square root value sqrt() function
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9) . "<br>");
echo(sqrt(0.64) . "<br>");
echo(sqrt(-9));
//math rounding off value round() function
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
echo(ceil(0.49) . "<br>");
echo(floor(-4.40) . "<br>");
//math generating random number rand() function
echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(10,100));


//Float Value Function
$d = "205.9";
echo floatval($d) . "<br>";

$e = "205.9safwan";
echo floatval($e) . "<br";

$f = "safwan209.5";
echo floatval($f);


//String Length Function
echo strlen("Hello"); 
//String word count Function
echo str_word_count("Hello world!");
//String reverse Function
echo strrev("Hello World!");
//String position finder Function
echo strripos("I love php, I love php too!","PHP");
//String replace Function
echo str_replace("world","Peter","Hello world!");
//capitalizing each letter of the first word
echo ucwords("hello|world", "|");
//defining a constant
define("GREETING","Hello you! How are you today?");
echo constant("GREETING");




?>
