<?php
include ("helper/dbFunctions.php");

$theID = $_POST['reviewID'];
echo $theID;
global $link;

$queryDelete = "DELETE FROM reviews WHERE reviewId =$theID;";

$status = query($queryDelete);


if ($status) {
    $message = "Review has been deleted";
} else {
    $message = "Review deletion failed";
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('views/header.php') ?>
    <title>Item Delete</title>
</head>
<body>
<h3>Delete</h3>
<?php
echo $message;
?>
</body>
</html>