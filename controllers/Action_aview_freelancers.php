<?php

//action.php
session_start();
require_once('../db/db_connect.php');
$connect = db_conn();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "delete")
	{
		$query = 'SELECT * FROM freelancers WHERE id = "'.$_POST["id"].'"';
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();

		$query1 = 'DELETE FROM users WHERE id = "'.$result[0]['u_id'].'"';
		$statement1 = $connect->prepare($query1);
        $statement1->execute();
		
		$query2 = 'DELETE FROM freelancers WHERE id = "'.$result[0]['id'].'"';
		$statement2 = $connect->prepare($query2);
        $statement2->execute();
		echo true;
	}
}

?>