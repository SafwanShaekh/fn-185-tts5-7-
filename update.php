<?php
include("db_con.php");

$update = "UPDATE `users` SET `name`='burhan',`email`='burhan@gmail.com',`password`='786' WHERE id = 199";

if($db_con->query($update)===TRUE){
    echo("Data updated successfully");
}
else{
    echo("Failed to update data");
}

?>