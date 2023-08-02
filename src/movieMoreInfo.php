

<?php include('views/header.php');
require('helper/dbfunctions.php');?><!DOCTYPE html>
<html>
<head>

    <title>Reviews</title>
    <link rel="stylesheet" href="../styleSheets/style.css" type="text/css">
</head>
<body>


<!--<div style="display: inline-flex; justify-content: center; align-items: center;">
    <div class="grid-container" style="justify-content: center; display: flex; box-sizing: border-box; grid-template-columns: repeat(auto-fill, minmax(300px, 300px)); column-gap: 5px; flex-wrap: wrap;">
    <img src="../../Images/photo-454436757.png">
    <div class="container text-center" >
        <div style="">
            <p>Title: </p>
            <p>Director: </p>
            <p>Genre: </p>
            <p>Language: </p>
            <p>Director: </p>
            <p>Actors:</p>
            <p>Description: </p>
        </div>
    </div>
</div>-->

<?php
include('movieReview.php')
?>

</body>
</html>

<?php
// create movie class
//avg rating method
//total review


// TODO: make more information page with
// - full full info
// - include review table
//
// add user logins (add session, add welcome message)
// ADD USER FORGOT PASSWORD (reset link, confirm email, send email, new link change password

// add user registering (create cookies for first time register username & password
// then check if username exists)

// delete register cookies, then insert user into database

// add review functions (check session: edit, delete)
//


// new features:
// - edit user information (check session to see if logged into user, cookie for temp changed info)
// delete acc (check session)
//fucking search bar

//




?>
