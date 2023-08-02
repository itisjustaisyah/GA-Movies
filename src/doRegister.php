<?php
require "helper/dbfunctions.php";
global $link;

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$dob = $_POST['DOB'];
$email = $_POST['email'];

$queryDupe = "SELECT username
FROM users
WHERE username = '$username';";


$statusDupe = mysqli_query($link, $queryDupe);

if (mysqli_num_rows($statusDupe) > 0) {
    $message = "<p>The username $username already exists <br>
                <a href='login.php'>Try again!</a></p>";
} else {
    $queryInsert = "INSERT INTO users (username,password,name,dob,email) 
          VALUES 
          ('$name',
           '$password',
           '$name',
           '$dob',
           '$email')";
    $statusInsert = mysqli_query($link, $queryInsert);
    if($statusInsert ){
        $message = "Your new account has been successfully created. You are now ready to <a href='login.php'>login</a>.";
    }else{$message = "Account creation unsuccessful :(";}

}


mysqli_close($link);
?>
<!DOCTYPE html>
<include
<html>
<head>
    <title>Registration</title>
    <?php include "views/header.php"; ?>
</head>
<body>
 <H1><?php echo $message?></H1>
</body>

