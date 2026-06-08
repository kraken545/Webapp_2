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


if ($user && password_verify($password_input, $user['password'])) {
    $_SESSION['user_logged_in'] = true;
    $_SESSION['user_id'] = $user['userid'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_firstname'] = $user['firstname'];
    $_SESSION['user_lastname'] = $user['lastname'];
    $_SESSION['user_phone'] = $user['phone'];

    header('Location: ../../private/profile.php');
    exit;
}

// Try admin login
$admin_username = $username_input;
$sql_admin = "SELECT * FROM admins WHERE username = :username";
$stmt_admin = $conn->prepare($sql_admin);
$stmt_admin->bindParam(':username', $admin_username);
$stmt_admin->execute();
$admin = $stmt_admin->fetch();

if ($admin && password_verify($password_input, $admin['password'])) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $admin['username'];
    header('Location: ../../private/admin.php');
    exit;
}


