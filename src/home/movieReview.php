<!DOCTYPE html>
<include
<html>
<head>
    <title>Movies</title>
    <link rel="stylesheet" href="styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('../header.php') ?>

<div class="table-responsive m-3">
    <table class="table align-middle table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Date of review</th>
            <th scope="col">5</th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < 11; $i++) {
            ?>
            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td>Mark</td>
                <td>MarkGuy</td>
                <td>2023-03-29</td>
                <td>5</td>
                <td>Joined in the Avatar bandwagon late but what a spectacle. stunning visual effects</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary" onclick="location.href = 'editReview.php';">Edit</button>
                        <button type="button" class="btn btn-outline-danger" onclick="location.href = 'deleteReview.php';">Delete</button>
                    </div>
                </td>
                <!--'Joined in the Avatar bandwagon late but what a spectacle. stunning visual effects', 5, '2023-03-29'),
                'Heartwarming show, definitely worth a watch', 5, '2023-04-04'),
                'Best movie ever!', 5, '2023-04-19'),
                'quite boring.', 2, '2023-04-19'),
                'Good movie for dog lovers. Puppy is very cute.', 4, '2023-04-19');-->
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>
