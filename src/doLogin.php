<?php
session_start();
$msg = "";

//check whether session variable 'user_id' is set
//in other words, check whether the user is already logged in
if (isset($_SESSION['user_id'])) {
    $msg = "You are already logged in.";
} else { //user is not logged in
    //check whether form input 'username' contains value
    if (isset($_POST['username'])) {

        //retrieve form data
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];

        //connect to database
        include ("helper/dbFunctions.php");
        global $link;

        //match the username and password entered with database record
        $query = "SELECT userId, username  FROM users 
                  WHERE username='$entered_usernamze' AND 
                  password = '$entered_password'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        //if record is found, store id and username into session
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            $msg = "$row";
//            header("location: movies.php");
        } else { //record not found
            $msg = "Sorry, you must enter a valid username 
                    and password to log in.";
        }
    }
}
?>
<!DOCTYPE html>
<include
<html>
<head>

    <title>Login</title>
    <link href="../styleSheets/http_cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('views/header.php') ?>
<H1>Login successful</H1>
</body>