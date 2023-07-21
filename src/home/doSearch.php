<?php
$search = $_GET['search'];
echo $search;
header('Location: movies.php?search=$search');