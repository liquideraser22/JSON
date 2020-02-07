<?php 
include 'config.php';
include 'class.movies.php';
header('Content-Type: application/json');
$movies = new movies();
$list=$movie->get_movie();
echo "{\"movie\":";
echo json_encode($list);
echo "}";
?>
