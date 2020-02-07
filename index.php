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
        <td><?php echo $value['mov_title'];?></td>
        <td><?php echo $value['mov_actor'];?></td>
        <td><?php echo $value['mov_genre'];?></td>
        <td><?php echo $value['mov_director'];?></td>
    </ul>
<?php
}
?>
</div>
