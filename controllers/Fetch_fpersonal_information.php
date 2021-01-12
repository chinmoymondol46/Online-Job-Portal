<?php

//fetch.php
session_start();
require_once("../db/db_connect.php");
$connect = db_conn();
$query = "SELECT * FROM `freelancers`  WHERE id = ".$_SESSION['id'].";";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();

echo json_encode($result);
?>