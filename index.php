<?php
$json = file_get_contents('https://new-app-json.herokuapp.com/json_1.php');

$data = json_decode($json,true);
$list = $data['movie'];
//$list = $data['movies'][1];


//var_dump($data);
//echo "<pre>";

//print_r($list);
?>
<div class="content">
<h1>Movies</h1>
</div>
<div class="content">
<table border="1px">
    <tr class="head">
        <td>ID</td>
        <td>Title</td>
        <td>Actor</td>
        <td>Genre</td>
        <td>Director</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['mov_id'];?></td>
        <td><?php echo $value['mov_title'];?></td>
        <td><?php echo $value['mov_actor'];?></td>
        <td><?php echo $value['mov_genre'];?></td>
        <td><?php echo $value['mov_director'];?></td>
    </tr>
 
<?php
}
?>
</table>

<style>

    .content{
        display: flex;
        justify-content: center;
    }
	table{
		border: 1px solid black;
		width: 100%;
		text-align: center;
		
	}
	th, td{
		border: 1px solid #ddd;
		padding: 10px;

	}
    tr:nth-child(even) {background-color: grey;}
	a {
		color: #66fcf1;
	}
    .head{
		background-color: #45a29e;
		color: #1f2833;
		font-weight: bold;
	}
</style>
</div>
