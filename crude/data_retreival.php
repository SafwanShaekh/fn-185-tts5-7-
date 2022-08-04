<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crude";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `id`, `name`, `email`, `password` FROM `users`";
mysqli_select_db($conn,"db_crude");
$retval =   mysqli_query($conn,$sql);
if(!$retval){
  die("Error occured while retrieving data");
}
while($row = mysqli_fetch_array($retval)){
  echo("User id : {$row["id"]} </br>" . "User name : {$row["name"]} </br>name". "email : {$row["email"]} </br>");
}
$conn->close();
?>