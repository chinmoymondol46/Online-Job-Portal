<?php
require_once '../model.php';
session_start();
if(isset($_POST['loginBtn']))
{
    $data['email'] = $_POST['email'];
    $data['password'] = $_POST['password'];
    if(checkAccount($data))
    {
        $type = checkType($data);
        if($type['usertype'] == 'outsourcer')
        {
            if(!empty($_POST['remember']))
            {
            $row = checkOInfo($data);
            setcookie($$row['id'], $$row['name'], $row['u_id'], time() + (86400 * 30), "/");
            }
            else
            {
            $row = checkOInfo($data);
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['u_id'] = $row['u_id'];
            header("Location: ../Outsourcer_dashboard.php");
            }
        }
        else if($type['usertype'] == 'freelancer')
        {
            $row = checkFInfo($data);
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['u_id'] = $row['u_id'];
            header("Location: ../Freelancer_dashboard.php");
        }
        else if($type['usertype'] == 'admin')
        {
            $row = checkAInfo($data);
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['u_id'] = $row['u_id'];
            header("Location: ../Admin_dashboard.php");
        }
    }
    else
    {
        $_SESSION['error'] = "Email or Password incorrect";
        header("Location: ../login.php");
    }
}
?>