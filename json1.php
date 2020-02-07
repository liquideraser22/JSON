<?php 
include 'config.php';
include 'class.movies.php';
header('Content-Type: application/json');
$moviess = new movies();
$list=$moviess->get_moviess();
echo "{\"movies\":";
echo json_encode($list);
echo "}";
?>
