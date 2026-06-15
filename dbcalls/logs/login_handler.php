<?php
include('../conn.php');
session_start();

$username_input = $_POST['username'];
$password_input = $_POST['password'];



$sql_user = "SELECT * FROM users WHERE email = :email";
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bindParam(':email', $username_input);
$stmt_user->execute();
$user = $stmt_user->fetch();


if (isset($user) && password_verify($password_input, $user['password'])) {
    $_SESSION['user_logged_in'] = true;
    $_SESSION['user_id'] = $user['userid'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_firstname'] = $user['firstname'];
    $_SESSION['user_lastname'] = $user['lastname'];
    $_SESSION['user_phone'] = $user['phone'];
    $_SESSION['role'] = $user['role'];
    header("Location: ../../private/login.php");
    if ($user['role'] == 'admin') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: ../../private/admin.php');
    } 
} 
