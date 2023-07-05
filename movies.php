<!DOCTYPE html>
<include
<html>
<head>

    <title>Movies</title>
    <link rel="stylesheet" href="styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('header.php') ?>

<div class="grid-container" style="justify-content: center; display: flex; box-sizing: border-box; grid-template-columns: repeat(auto-fill, minmax(200px, 200px)); column-gap: 12px; flex-wrap: wrap;" >
    <div class="movieBlock">
        <img height="200" height="200" src="Images/avatar.png">
        <p><div>Name</div>
        <div>Genre</div>
        <br/>
        <div><a href="seeMore.php">More</a></div></p>
    </div>

    <div class="movieBlock">
        <img height="200" height="200" src="Images/avatar.png">
        <p><div>Name</div>
        <div>Genre</div>
        <br/>
        <div><a href="seeMore.php">More</a></div></p>
    </div>

    <div class="movieBlock">
        <img height="200" height="200" src="Images/avatar.png">
        <p><div>Name</div>
        <div>Genre</div>
        <br/>
        <div><a href="seeMore.php">More</a></div></p>
    </div>
</div>

</body>
</html>

