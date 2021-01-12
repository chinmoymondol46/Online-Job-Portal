<?php
session_start();
require_once '../model.php';
$var = "";
if (isset($_POST['insert']))
{
$data['title'] = $_POST['title'];
$data['description'] = $_POST['description'];
$data['amount'] = $_POST['amount'];
$data['duration'] = $_POST['duration'];
$data['o_id'] = $_SESSION['id'];

if (addJob($data))
{
    header("Location: ../Outsourcer_dashboard.php");
}
}
else
{
    echo 'You are not allowed to access this page.';
}
?>
