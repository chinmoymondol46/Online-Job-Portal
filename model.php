<?php
require_once 'db/db_connect.php';
function checkAccount($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT count(*) FROM `users` where email = ? and password = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['email'], $data['password']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchColumn();
    $conn = null;
    if ($rows == 1) {
        return true;
    } else
        return false;
}

function addOAccount($data)
{
    $name = $data['fname'] . " " . $data['lname'];
    $conn = db_conn();
    $selectQuery = "INSERT into users (email, password, usertype)
        VALUES (:email, :password, :usertype)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':usertype' => "outsourcer",
        ]);
        $uid = $conn->lastInsertId();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $selectQuery = "INSERT into outsources (u_id, name, gender, email, joining_date, website, nid_number)
        VALUES (:u_id, :name, :gender, :email, :joining_date, :website, :nid_number)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':u_id' => $uid,
            ':name' => $name,
            ':gender' => $data['gender'],
            ':email' => $data['email'],
            ':joining_date' => date("Y/m/d"),
            ':website' => $data['website'],
            ':nid_number' => $data['nid']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
function addFAccount($data)
{
    $name = $data['fname'] . " " . $data['lname'];
    $conn = db_conn();
    $selectQuery = "INSERT into users (email, password, usertype)
        VALUES (:email, :password, :usertype)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':usertype' => "freelancer",
        ]);
        $uid = $conn->lastInsertId();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $selectQuery = "INSERT into `freelancers` (u_id, name, gender, email, joining_date, skills, portfolio_link, nid_number)
        VALUES (:u_id, :name, :gender, :email, :joining_date, :skills, :portfolio_link, :nid_number)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':u_id' => $uid,
            ':name' => $name,
            ':gender' => $data['gender'],
            ':email' => $data['email'],
            ':joining_date' => date("Y/m/d"),
            ':skills' => $data['skills'],
            ':portfolio_link' => $data['portfolio_link'],
            ':nid_number' => $data['nid']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
function checkType($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `users` where email = ? and password = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['email'], $data['password']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}
function checkOInfo($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `outsources` where email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['email']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}
function checkFInfo($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `freelancers` where email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['email']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}
function checkAInfo($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admins` where email = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['email']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $row;
}

function addJob($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into jobs (o_id, title, description, amount, duration, status)
            VALUES (:o_id, :title, :description, :amount, :duration, :status);";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':o_id' => $data['o_id'],
            ':title' => $data['title'],
            ':description' => $data['description'],
            ':amount' => (int)$data['amount'],
            ':duration' => (int)$data['duration'],
            ':status' => "pending"
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

