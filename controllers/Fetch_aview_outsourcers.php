<?php

//fetch.php
session_start();
require_once("../db/db_connect.php");
$connect = db_conn();
if(isset($_POST['search']) && $_POST['search'] != ''){
	$query = 'SELECT * FROM outsources where name LIKE "%'.$_POST['search'].'%";';
} else {
	$query = 'SELECT * FROM outsources where 1;';
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Gender</th>
        <th>Email</th>
        <th>Joining Date</th>
		<th>Website</th>
		<th>Action</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr id='.$row["id"].'>
			<td>'.$row["u_id"].'</td>
			<td>'.$row["name"].'</td>
			<td>'.$row["gender"].'</td>
			<td>'.$row["email"].'</td>
			<td>'.$row["joining_date"].'</td>
			<td>'.$row["website"].'</td>
			<td style="text-align: center">
					<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
			</td>
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