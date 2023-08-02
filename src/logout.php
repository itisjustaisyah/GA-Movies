<?php
session_start();
if (isset($_SESSION['user_id'])) {
    session_destroy();
    $_SESSION = array();
}
$message = "You have logged out.";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('views/header.php') ?>
    <title>Registration</title>
</head>
<body>
<h3>Logout</h3>
<?php
echo $message;
?>
</body>
</html>