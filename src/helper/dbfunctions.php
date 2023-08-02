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
function query($query){
    global $link;
    $resultItems = mysqli_query($link, $query) or
        die(mysqli_error($link));
    mysqli_close($link);
    return $resultItems;
}

function getArrofRows($query){
    global $link;
    $arrItems = null;
    $resultItems = query($query);


    if(mysqli_num_rows($resultItems)){
        while($row = mysqli_fetch_array($resultItems)){
            $arrItems[] = $row;
        }
        return $arrItems;
    } else{
        return null;
    }

//TODO: fix the arrItems returning null and breaking array
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