<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "c203_moviereviewdb";

$link = mysqli_connect($host, $username, $password, $database);

$query = "SELECT * FROM movies";