<!DOCTYPE html>
<include
<html>
<head>

    <title>Movies</title>
    <link rel="stylesheet" href="../../styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('../header.php') ?>

<div class="container text-center" >
    <div class="row row-cols-auto row-cols-sm-2 row-cols-md-3 g-3 justify-content-evenly" >
        <?php
        include('movieArray.php')
        ?>

    </div>


</div>

</body>
</html>

