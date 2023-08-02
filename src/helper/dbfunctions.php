<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "c203_moviereviewdb";

$link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$link) {
    die(mysqli_error($link));
    // alternative way to display the error:
    // die(mysqli_connect_error());
}

function getArrofRows($query){
    global $link;
    $arrItems = null;
    $resultItems = mysqli_query($link, $query) or
    die(mysqli_error($link));
    mysqli_close($link);

    while($row = mysqli_fetch_array($resultItems)){
        $arrItems[] = $row;
    }


    return $arrItems;
}

/*function getMovieFromId($id){
    $moviesQuery = "
SELECT *
FROM movies
WHERE movieId LIKE '$id'";
    $arrMovies = getArrofRows($moviesQuery);
    print_r($arrMovies[0]);
    return $arrMovies[0];
}*/

global $link;