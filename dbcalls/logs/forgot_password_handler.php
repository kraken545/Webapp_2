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
    $change_success = $stmt->execute();

    if ($change_success) {
        header('Location: ../../private/login.php?password=changed');
        exit;
    } else {
        header('Location: ../../private/forgot-password.php?error=update_failed');
        exit;
    }
} else {
    header('Location: ../../private/forgot-password.php?error=email_not_found');
    exit;
}
