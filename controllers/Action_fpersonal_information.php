<?php

//action.php
session_start();
require_once('../db/db_connect.php');
$connect = db_conn();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "update")
	{
		if($_POST["password"] != ''){	//if condition to check valication
			$query = "
			UPDATE freelancers 
			SET name = '".$_POST["name"]."', 
			email = '".$_POST["email"]."',
			skills = '".$_POST["skills"]."',
			portfolio_link = '".$_POST["portfolio_link"]."'
			where id = ".$_SESSION['id'].";";
			$statement = $connect->prepare($query);
			$statement->execute();

			$query1 = "
			UPDATE users 
			SET password = '".$_POST["password"]."', 
			email = '".$_POST["email"]."'
			where id = ".$_SESSION['u_id'].";";
			$statement1 = $connect->prepare($query1);
			$statement1->execute();

			echo json_encode(true);	//return data for accept condition
		} else {
			echo json_encode('password empty');	//return data for reject contition
		}
	}
}
?>