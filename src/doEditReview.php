<?php
session_start();
// include a php file that contains the common database connection codes
require ("helper/dbFunctions.php");
global $link;

//retrieve computer details from the textarea on the previous page
$updatedReview = $_POST['review'];

//retrieve id from the hidden form field of the previous page
$theID = $_POST['id'];

$msg = "";

//build a query to update the table
//update the record with the details from the form
$queryUpdate = "UPDATE reviews 
                SET review='$updatedReview'
                WHERE reviewId = $theID";

//execute the query
$resultUpdate = query($queryUpdate);

//if statement to check whether the update is successful
//store the success or error message into variable $msg
if ($resultUpdate) {
    $msg = "Review updated successfully";
} else {
    $msg = "Review not updated";
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "views/header.php" ?>
    <title>Edit Review</title>
</head>
<body>
<h3>Edit Review</h3>
<?php echo $msg; ?>
</body>
</html>