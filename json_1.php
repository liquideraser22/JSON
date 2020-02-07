<?php 
include 'config.php';
include 'class.movies.php';
header('Content-Type: application/json');
$movies = new Movies();
$list=$movies->get_movies();
echo "{\"movies\":";
echo json_encode($list);
echo "}";
?>
