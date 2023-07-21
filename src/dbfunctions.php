<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "ga_movies_db";

$link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$link) {
    die(mysqli_error($link));
    // alternative way to display the error:
    // die(mysqli_connect_error());
}

function getArrofRows($query){
    global $link;
    $arrItems[] = [];
    $resultItems = mysqli_query($link, $query) or
    die(mysqli_error($link));

    if(mysqli_num_rows($resultItems)== 0){
        while($row = mysqli_fetch_assoc($resultItems)){
            $arrItems = $row;
        }
    }


    mysqli_close($link);
    return $arrItems;
}

global $link;