<?php 
include 'config.php';
include 'class.movie.php';
header('Content-Type: application/json');
$movies = new movies();
$list=$movies->get_movies();
echo "{\"movies\":";
echo json_encode($list);
echo "}";
?>
