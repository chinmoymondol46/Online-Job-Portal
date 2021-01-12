<?php

//action.php

require_once('../db/db_connect.php');
$connect = db_conn();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM jobs WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['title'] = $row['title'];
			$output['description'] = $row['description'];
			$output['amount'] = $row['amount'];
			$output['duration'] = $row['duration'];
			$output['status'] = $row['status'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE jobs 
		SET title = '".$_POST["title"]."', 
		description = '".$_POST["description"]."',
		duration = '".$_POST["duration"]."',
		amount = '".$_POST["amount"]."',
		status = '".$_POST["status"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM jobs WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>