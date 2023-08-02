<?php
require ("helper/dbFunctions.php");
global $link;

$reviewID = $_GET['reviewId'];


$queryReview = "SELECT * FROM reviews
          WHERE reviewId LIKE '$reviewID'";

$resultItem = query($queryReview);

$rowItem = mysqli_fetch_array($resultItem);
?>
<!DOCTYPE html>
<include
<html>
<head>
    <?php include('views/header.php') ?>
    <title>Delete</title>
</head>
<body>
<h3>Delete Review</h3>
<div class="p-3">

        <p><b>Name:</b>
            <?php echo $rowItem['reviewId'] ?></p>

        <p>
            <b>UserId:</b>
            <?php echo $rowItem['userId'] ?>
        </p>

        <p><b>Date Posted:</b>
            <?php echo $rowItem['datePosted'] ?></p>

    <p><b>Rating:</b>
        <?php echo $rowItem['rating'] ?></p>

    <p><i><?php echo $rowItem['review'] ?></i></p>




    <form method="post" action="doEditReview.php">
        <input type="hidden" name="id" value="<?php echo $rowItem['reviewId'] ?>"/>
        <p>Are you sure to delete this review?</p>
        <input type="submit" value="Delete review"/>
    </form>
</div>
</body>