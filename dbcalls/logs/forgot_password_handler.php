<?php
include('../conn.php');
session_start();

$email = $_POST['email'];
$new_password = $_POST['new_password'];

// Check if email exists
$stmt_check = $conn->prepare("SELECT * FROM users WHERE email = :email");
$stmt_check->bindParam(':email', $email);
$stmt_check->execute();

if ($stmt_check->rowCount() > 0) {
    $hashed_password = password_hash($new_password, PASSWORD_ARGON2ID);
    
    $sql = "UPDATE users SET password = :password WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

}
 header('Location: ../../private/login.php');