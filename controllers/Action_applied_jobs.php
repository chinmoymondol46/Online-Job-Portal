<?php

//action.php
session_start();
require_once('../db/db_connect.php');
$connect = db_conn();

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == "done")
	{
		$query = "UPDATE jobs SET status = 'complete' WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
        $statement->execute();
        $query = "UPDATE freelancers SET work_done = work_done + 1 where id = '".$_SESSION["id"]."'";
		$statement = $connect->prepare($query);
        $statement->execute();
        $query = "DELETE from applied_jobs WHERE j_id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
        $statement->execute();
		echo '<p>Job completed</p>';
	}
}

?>