<?php

//action.php
session_start();
require_once('../db/db_connect.php');
$connect = db_conn();

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == "approve")
	{
		$query = "UPDATE jobs SET status = 'available' WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
        $statement->execute();
		echo true;
	}

	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM jobs WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
        $statement->execute();
		echo true;
	}
}

?>