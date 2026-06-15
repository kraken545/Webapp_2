<?php
include('../conn.php');
session_start();

$userid = uniqid('user_');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    header('Location: ../../private/signup.php?error=password_mismatch');
    exit;
}


$hashed_password = password_hash($password, PASSWORD_ARGON2ID);

$sql = "INSERT INTO users (userid, firstname, lastname, email, phone, password, role) VALUES (:userid, :firstname, :lastname, :email, :phone, :password, 'user')";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':userid', $userid);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':password', $hashed_password);
$success = $stmt->execute();

if ($success) {
    header('Location: ../../private/login.php');
    exit;
}
