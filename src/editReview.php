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
<html>
<head>
    <title>Edit</title>
    <?php include('views/header.php') ?>
</head>
<body>
    <h3>Edit Review</h3>
    <div class="p-3">
        <form method="post" action="doEditReview.php">
            <p><label>Name:</label>
                <?php echo $rowItem['reviewId'] ?></p>

            <p>
                <label>UserId:</label>
                <?php echo $rowItem['userId'] ?>
            </p>

            <p><label>Date Posted:</label>
                <?php echo $rowItem['datePosted'] ?></p>


            <p><label>Editable description:</label></p>
            <p>
                <textarea rows="5" cols="30" name="review"><?php echo $rowItem['review'] ?></textarea>
            </p>



            <p><label for="rating">Rating:</label><br />
                <input type="range" id="rating" name="rating" list="markers" min="0" max="5" step="1"/>
                <datalist id="markers">
                    <option value="0"></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>

                </datalist>
            </p>



            <input type="hidden" name="id" value="<?php echo $rowItem['reviewId'] ?>"/>
            <input type="submit" value="Update review"/>
        </form>
    </div>
</body>
</html>