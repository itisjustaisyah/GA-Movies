<!DOCTYPE html>
<include xmlns="http://www.w3.org/1999/html"/>
<html>
<head>

    <title>Registration</title>
    <link href="../styleSheets/http_cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('views/header.php') ?>
<div style="padding: 2%">
    <form class="needs-validation" action="doLogin.php" method="post">
        <fieldset>
            <legend>Login</legend>

            <div>
                <label class="col-md-4 form-label" for="username">Username</label>
                <div class="col-5">
                    <input id="username" name="username" type="text" placeholder="Enter your username" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter a valid username
                    </div>
                </div>

                <label class="col-md-4 form-label" for="password">Username</label>
                <div class="col-5">
                <div class="col-5">
                    <input id= "password" name="password" type="password" placeholder="Enter password" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter password
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" value="Login"></input>


    </form>
</div>
</body>
</html>
