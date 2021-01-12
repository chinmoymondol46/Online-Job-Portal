<?php
require_once '../model.php';
$var = "";
if (isset($_POST['regBtn']))
{
$data['fname'] = $_POST['fname'];
$data['lname'] = $_POST['lname'];
$data['email'] = $_POST['email'];
$data['gender'] = $_POST['gender'];
$data['website'] = $_POST["website"];
$data['nid'] = $_POST["nid"];
$data['password'] =  $_POST["password"];
if (addOAccount($data))
{
	header('Location: ../Login.php');
}
}
else
{
    echo 'You are not allowed to access this page.';
}
?>
