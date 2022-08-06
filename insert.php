<?php
include("db_con.php");

$insert = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('safwan','safwan@gmail.com','123')";

if($db_con->query($insert)=== TRUE){
    echo("Data insertion successful");
}
else{
    echo("Data insertion failed");
}

?>