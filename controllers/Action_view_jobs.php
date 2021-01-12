<?php

//action.php
session_start();
require_once('../db/db_connect.php');
$connect = db_conn();

if(isset($_POST["action"]))
{
	
	if($_POST["action"] == "done")
	{
		$query = "UPDATE jobs SET status = 'active' WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
        $statement->execute();
        
        $query1 = "INSERT into applied_jobs (f_id, j_id)
            VALUES (:f_id, :j_id);";
            $statement = $connect->prepare($query1);
            $statement->execute([
            ':f_id' => (int)$_SESSION['id'],
            ':j_id' => (int)$_POST['id'],
            ]);
            print_r($statement);
		echo '<p>Job completed</p>';
    }
}

?>