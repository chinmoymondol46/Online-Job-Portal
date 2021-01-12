<?php
require_once '../model.php';
if (isset($_POST['regBtn']))
{
$data['fname'] = $_POST['fname'];
$data['lname'] = $_POST['lname'];
$data['email'] = $_POST['email'];
$data['gender'] = $_POST['gender'];
$data['skills'] = $_POST["skills"];
$data['portfolio_link'] = $_POST["plink"];
$data['nid'] = $_POST["nid"];
$data['password'] =  $_POST["password"];
if (addFAccount($data))
{
	header('Location: ../Login.php');
}
}
else
{
    echo 'You are not allowed to access this page.';
}
?>
