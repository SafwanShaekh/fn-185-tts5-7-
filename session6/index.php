<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms | HTML</title>
</head>
<body>
    <!-- <form action="welcome.php" method="post">
        Name : <input type="text" name="name">
        <br>
        Password : <input type="password" name="pwd">
        <br>
        <input type="submit" value="submit" name="enter">
    </form> -->
    <form action="index.php" method="get">
        <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="fullname"  placeholder="Enter Your Name">
      <label for="">Password</label>
      <input type="password" class="form-control" name="pwd"  placeholder="Enter Your Password" required>
      <input type="submit" class="btn btn-primary " value="submit" >
    </div></form>
    
<?php
    // error_reporting(0);
    echo($_GET['fullname']);
    echo($_GET['pwd']);
    ?>
</body>
</html>