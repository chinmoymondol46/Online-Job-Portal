<?php

//fetch.php
session_start();
require_once("../db/db_connect.php");
$connect = db_conn();
if(isset($_POST['search']) && $_POST['search'] != ''){
	$query = 'SELECT * FROM jobs where title LIKE "%'.$_POST['search'].'%";';
} else {
	$query = "SELECT * FROM `jobs`  WHERE status = 'available'".";";
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Title</th>
		<th>Description</th>
        <th>Amount</th>
        <th>Duration</th>
		<th>Status</th>
		<th>Action</th>
		
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["title"].'</td>
			<td>'.$row["description"].'</td>
			<td>'.$row["amount"].'</td>
            <td>'.$row["duration"].'</td>
			<td>'.$row["status"].'</td>
			<td><button type="button" name="done" class="btn btn-primary btn-xs done" id="'.$row["id"].'">Apply</button></td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>