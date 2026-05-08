<?php
/**
 * Admin Users - CREATE Operation
 * Place in: /dbcalls/admin/create.php
 */

include('../conn.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$sql = "INSERT INTO admin_users (username, email, password) VALUES (:username, :email, :password)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $hashed_password);

$stmt->execute();
