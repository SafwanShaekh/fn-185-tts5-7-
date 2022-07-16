<?php
// echo (max(23,45,564,12,4)) . "<br>";
// echo(min(23,54,1,785,98)) . "<br>";
// echo (pi()) ."<br>";
// $muzammil = "209.5safwan";
// echo floatval($muzammil) . "<br>";

// $ahsan = "ali209.5";
// echo floatval($ahsan) . "<br>";

// echo strlen( "this is my course"). "<br>";

// echo str_word_count( "this is my course"). "<br>";

// echo strrev( "this is my course"). "<br>";

// echo strripos("I love php, I love php too!","PHP"). "<br>";

// echo str_replace("Hello","Ahsan","Hello world!"). "<br>";

// echo ucwords("this is my camel text");

//FUNCTION TO FIND OUT ABSOLUTE VALUE OF A NUMBER
// echo abs(-6.4). "<br>";

// echo round(0.60). "<br>";
// echo ceil(26.4). "<br>";
// echo floor(26.8). "<br>";

// $text ="My name is Safwan";
// $num1 = 34;
// $num2 = 75.93;

// echo($text);
// echo"<br>";
// echo($num1);
// echo"<br>";
// echo($num2);
// echo"<br>";


//  function mytest(){
//     $x = 5;
//     echo"Variable x inside function is: $x";    
//  }
//    mytest();
//    echo"Variable x inside function is: $x";


// function multiply($value){
//    $value = $value*20;
//    return $value;
// }
//    $retval = multiply(10);
//   echo "The retval variable contains $retval\n ";

// $value= null;
// echo($value);

// $x1 = 1024;
// echo"The given number $x1 is an integer : ";var_dump(is_int($x1));

// $x2 = 99.84;
// echo"The given number $x2 is an integer : ";var_dump(is_int($x2));

// $timeoftheday = date("H");
// if($timeoftheday< "16"){
//     echo "Happy Morning" ."<br>";
// }
// echo date(DATE_RFC822);

// $houroftheday = date("H");
// if($houroftheday< "18"){
//     echo "Have a nice day ahead";
// }
// else{
//     echo "Good night";
// }

// $num = 13;
// if($num<0){
//     echo"The number is negative";
// }
// else if($num%2 == 0){
//     echo"The number is even";
// }
// else{
//     echo "The number is odd";
// }

// $language = "php-8";
// switch($language){
//     case "C":
//         echo "Your favourite language is C";
//         break;
//     case "php-8":
//         echo "Your favourite language is php-8";
//         break;
//     case "C++":
//         echo "Your favourite language is C++";
//         break;
//     default:
//         echo "Your language is neither C, nor PHP-8, and not C++ as well";
// }
    //For Loop
// $n=1;
// while ($n <= 10) {
//     echo " The number is : $n " ."<br>";
//     $n++;
// }
    //Do While Loop
// $n=15;
// do{
//     echo "The number is : $n" ."<br>";
//     $n++;
// }
// while($n<=20 );
    //For Loop
// for($n=11 ; $n<=20 ; $n++){
//     echo"The number is : $n" . "<br>";
// }
    //foreach loop using associative arrays
// $flower = array("rose"=>"10","lilly"=>"20","lotus"=>"30");
// foreach($flower as $f=>$value){
//     echo "$f = $value <br>";
// }

// for($n=5 ; $n<15 ; $n++){
//     if($n==9){
//         // echo "The number is : $n <br>";
//         break;
//     }
//     echo "The number is : $n <br>";
// }

// for($n=0 ; $n<10 ; $n++){
//     if($n==4){        
//         continue;
//     }
//     echo "The number is : $n <br>";
// }
        //Indexed Array
// $num = array(21,23,45,61,73);
// // foreach($num as $value){
// //     echo " The value is  : $value <br>";
// // }
// $num[0] = "one";
// $num[1] = "two";
// $num[2] = 41;
// foreach($num as $value){
//     echo " The value is  : $value <br>";
// }
        //Associative Array
// $age = array("bilal"=>20,"Kazim"=>21);
$contact = array(
    array("Name"=>"David","email"=>"David@gmail.com","Number"=>"465464")
    ,
    array("Name"=>"Steve","email"=>"steve@gmail.com","Number"=>"89347298")
    ,
    array("Name"=>"James","email"=>"James@gmail.com","Number"=>"89342298")
);
echo "Email ID of Steve : ";
?>