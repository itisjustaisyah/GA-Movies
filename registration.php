<!DOCTYPE html>
<include
<html>
<head>

    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('header.php') ?>
<div style="padding: 1px; padding: 2%">
    <form>
        <fieldset>
            <legend>Personal Information</legend>

            <div class="form-group">
                <label class="col-md-4" for="username">Username</label>
                <div class="col-md-4">
                    <input id="username" name="username" type="text" placeholder="Enter your username" class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4" for="email">E-mail</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group row row-cols-1 row-cols-md-4 ">
                <label class="col" for="password">Password</label>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Enter password">
                </div>
                <label class="col" for="password">Confirm password</label>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Enter password again">
                </div>
            </div>





        </fieldset>

        <fieldset>
            <legend>Address</legend>
        </fieldset>


        <div class="form-group">
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
