<?php
$server = "localhost";
$username ="root";
$password ="";
$db_name ="db_crude";

$db_con = mysqli_connect($server,$username,$password,$db_name);

// if(!$db_con){
//     die("Connection failed");
// }
// $insert = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('safwan','safwan@gmail.com','123')";

// if($db_con->query($insert)== TRUE){
//     echo("Data insertion successful");
// }
// else{
//     echo("Data insertion failed");
// }


if(!$db_con){
    die("Connection failed");
}
$insert = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('safwan','safwan@gmail.com','123');";
$insert .= "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('kazim','kazim@gmail.com','123');";

if($db_con->multi_query($insert)=== TRUE){
    echo("Data insertion successful");
}
else{
    echo("Data insertion failed");
}
?>