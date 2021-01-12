<?php

//fetch.php
session_start();
require_once("../db/db_connect.php");
$connect = db_conn();
$query = "SELECT jobs.id, jobs.title, jobs.description, jobs.amount, jobs.duration, jobs.status  FROM `jobs` INNER JOIN applied_jobs ON jobs.id = applied_jobs.j_id WHERE applied_jobs.f_id = ".$_SESSION['id'].";";
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
	{
		$output .= '
		<tr>
		<td>'.$row["id"].'</td>
			<td>'.$row["title"].'</td>
			<td>'.$row["description"].'</td>
			<td>'.$row["amount"].'</td>
            <td>'.$row["duration"].'</td>
			<td>'.$row["status"].'</td>
			<td><button type="button" name="done" class="btn btn-primary btn-xs done" id="'.$row["id"].'">Done</button></td>
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