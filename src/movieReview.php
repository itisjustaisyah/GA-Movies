<?php

$movieId = $_GET['id'];
$reviewQuery = "
SELECT *
FROM users 
INNER JOIN reviews
ON users.userId = reviews.userId
INNER JOIN movies
ON reviews.movieId = movies.movieId
;";



global $link;
//$arrMovies[] = getArrofRows($moviesQuery);
?>


<!DOCTYPE html>
<include
<html>
<head>
    <title>Movies</title>
    <link rel="stylesheet" href="styleSheets/style.css" type="text/css">
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
                <td><?php echo $username ?></td>
                <td><?php echo $datePosted ?></td>
                <td><?php echo $rating ?></td>
                <td><?php echo $content ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary" onclick="location.href = '../editReview.php?id=<?php echo $id?>';">Edit</button>
                        <button type="button" class="btn btn-outline-danger" onclick="location.href = '../deleteReview.php?id=<?php echo $id?>';">Delete</button>
                    </div>
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
