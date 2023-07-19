<!DOCTYPE html>
<include
<html>
<head>

    <title>Registration</title>
    <link href="http_cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styleSheets/style.css" type="text/css">
</head>
<body>s
<?php include('../header.php') ?>
<div style="padding: 2%">
    <form class="needs-validation" action="doRegister.php" method="post">
        <fieldset>
            <legend>Login</legend>

            <div class=>
                <label class="col-md-4 form-label" for="username">Name</label>
                <div class="col-5">
                    <input id="username" name="username" type="text" placeholder="Enter your username" class="form-control is-invalid" required>
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                </div>
            </div>

            <div>
                <label class="col-md-4 form-label" for="DOB">Date Of Birth</label>
                <div class="col-auto">
                    <input id="DOB" name="DOB" type="date" class="form-control" required>

                </div>
            </div>

            <div>
                <label class="col-md-4 form-label" for="email">E-mail</label>
                <div class="col-11">
                    <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter a valid email
                    </div>
                </div>
            </div>

            <div>
                <label class="col-md-4 form-label" for="username">Username</label>
                <div class="col-5">
                    <input id="username" name="username" type="text" placeholder="Enter your username" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter a valid username
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <label class="col-sm-auto" for="password">Password</label>
                <div class="col-sm">
                    <input type="password" class="form-control" placeholder="Enter password" required>
                    <div class="invalid-feedback">
                        Enter a valid password
                    </div>
                </div>
                <label class="col-sm-auto" for="password">Confirm password</label>
                <div class="col-sm">
                    <input type="password" class="form-control" placeholder="Enter password again" required>
                    <div class="invalid-feedback">
                       Password does not match
                    </div>
                </div>
            </div>
            <br>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="newsletter">
                <label class="form-check-label" for="newsletter">Sign up for newsletter to get the latest movie updates</label>
            </div>


            <input type="submit" name="Register">


    </form>
</div>
</body>
</html>
