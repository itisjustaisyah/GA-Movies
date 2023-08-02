<?php
require "helper/dbfunctions.php";
session_start();
$msg = "";

if (isset($_SESSION['user_id'])) {
    $msg = "You are already logged in.";
} else {
    if (isset($_POST['username'])) {
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];
        global $link;

        $query = "SELECT userId, username  FROM users 
                  WHERE username='$entered_username' AND 
                  password = '$entered_password'";
        $result = query($query);

        //if record is found, store id and username into session
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $row['userId'];
            $_SESSION['username'] = $row['username'];

            $msg = $_SESSION['username'];
//            header("location: movies.php");
        } else { //record not found
            $msg = "Sorry, you must enter a valid username 
                    and password to log in.";
        }
    }
}

include('views/header.php')
?>
<!DOCTYPE html>

<include
<html>
<head>

    <title>Login</title>
    <link rel="stylesheet" href="../styleSheets/style.css" type="text/css">
</head>
<body>
<H1>Login successful</H1>
</body>