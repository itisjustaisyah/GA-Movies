<!DOCTYPE html>
<include xmlns="http://www.w3.org/1999/html"/>
<html>
<head>

    <?php include('views/header.php') ?>
    <title>Registration</title>
</head>
<body>
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

                <label class="col-md-4 form-label" for="password">Password</label>
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
