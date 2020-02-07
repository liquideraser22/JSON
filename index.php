<?php
$json = file_get_contents('https://jsonactivity1.herokuapp.com/json_1.php');

$data = json_decode($json,true);
$list = $data['movies'];
?>
<h1>Movies</h1>
<?php
foreach($list as $value){
    ?>
    <ul>
        <h2><?php echo $value['mov_title'];?></h2>
        <li>Actor: <?php echo $value['mov_actor'];?></li>
        <li>Genre: <?php echo $value['mov_genre'];?></li>
        <li>Director: <?php echo $value['mov_director'];?></li>
    </ul>
<?php
}
?>
</div>
