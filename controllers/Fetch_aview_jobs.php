<?php

//fetch.php
session_start();
require_once("../db/db_connect.php");
$connect = db_conn();
if(isset($_POST['search']) && $_POST['search'] != ''){
	$query = 'SELECT * FROM jobs where title LIKE "%'.$_POST['search'].'%";';
} else {
	$query = 'SELECT * FROM jobs where 1;';
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>ID</th>
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
{		if ($row["status"]=='pending') {
			$row_action = '<td style="text-align: center">
					<button type="button" name="approve" class="btn btn-primary btn-xs approve" id="'.$row["id"].'">Approve</button>
					<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
				</td>';
		} else {
			$row_action = '<td style="text-align: center">
			<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
		</td>';
		}
	
		$output .= '
		<tr id='.$row["id"].'>
			<td>'.$row["id"].'</td>
			<td>'.$row["title"].'</td>
			<td>'.$row["description"].'</td>
			<td>'.$row["amount"].'</td>
            <td>'.$row["duration"].'</td>
			<td>'.$row["status"].'</td>
            '.$row_action.'
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