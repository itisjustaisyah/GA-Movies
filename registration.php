<!DOCTYPE html>
<include
<html>
<head>

    <title>Registration</title>
    <link href="styleSheets/http_cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleSheets/style.css" type="text/css">
</head>
<body>s
<?php include('header.php') ?>
<div style="padding: 1px; padding: 2%">
    <form>
        <fieldset>
            <legend>Personal Information</legend>

            <div class=>
                <label class="col-md-4 " for="username">Username</label>
                <div class="col-md-4 col">
                    <input id="username" name="username" type="text" placeholder="Enter your username" class="form-control input-md" required="">

                </div>
            </div>

            <div>
                <label class="col-md-4" for="email">E-mail</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control input-md" required="">

                </div>
            </div>
            <br>
            <div class="row row-cols-1 row-cols-sm-4 d-flex flex-row justify-content-start">
                <label class="col-1" for="password">Password</label>
                <div class=col-sm-2">
                    <input type="password" class="form-control" placeholder="Enter password">
                </div>
                <label class="col-sm-1" for="password">Confirm password</label>
                <div class="col-sm-2">
                    <input type="password" class="form-control" placeholder="Enter password again">
                </div>
            </div>





        </fieldset>

        <fieldset>
            <legend>Address</legend>
        </fieldset>


        <div >
            <label class="col-md-4" for="newsletter"></label>
            <div class="col-md-4">
                <label class="checkbox-inline" for="newsletter-0">
                    <input type="checkbox" name="newsletter" id="newsletter-0" value="1">
                    Sign up for the newsletter
                </label>
            </div>
        </div>

    </form>
</div>
</body>
</html>
