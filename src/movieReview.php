<?php

$movieId = $_GET['movie'];
$reviewQuery = "
SELECT *
FROM users 
INNER JOIN reviews
ON users.userId = reviews.userId
INNER JOIN movies
ON reviews.movieId = movies.movieId
;";
if(isset($_SESSION['user_id'])){
    $sessionUserId = $_SESSION['user_id'];
}



global $link;
//$arrMovies[] = getArrofRows($moviesQuery);
?>


<!DOCTYPE html>
<include
<html>
<head>
    <title>Movies</title>
</head>
<body>
<div class="table-responsive m-3">
    <table class="table align-middle table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Date of review</th>
            <th scope="col">Rating</th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach (getArrofRows($reviewQuery) as $review) {
            if($movieId == $review['movieId']){

            $id = $review['reviewId'];
            $userId = $review['userId'];
            $content = $review['review'];
            $rating = $review['rating'];
            $datePosted = $review['datePosted'];
            $username = $review['username'];
            $name = $review['name'];
            ?>
            <tr>
                <th scope="row"><?php echo $id ?></th>
                <td><?php echo $name ?></td>
                <td><?php echo /*$userId.*/$username ?></td>
                <td><?php echo $datePosted ?></td>
                <td><?php echo $rating ?></td>
                <td><?php echo $content ?></td>
                <td>
                    <?php
                    if (isset($sessionUserId) && $sessionUserId == $userId){?>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary" onclick="location.href = 'editReview.php?reviewId=<?php echo $id?>';">Edit</button>
                        <button type="button" class="btn btn-outline-danger" onclick="location.href = 'deleteReview.php?reviewId=<?php echo $id?>';">Delete</button>
                    </div>
                    <?php
                    }
                    ?>

                </td>
            </tr>
            <?php
            }
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>
