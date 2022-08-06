<?php
include("db_con.php");

$delete ="DELETE FROM `users` WHERE id = 199";

if($db_con->query($delete)=== TRUE){
    echo("Record deleted successfully");
}
else{
    echo("unable to delete record");
}

?>