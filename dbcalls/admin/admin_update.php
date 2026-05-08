<?php

include('../conn.php');

$id = $_POST['id'] ?? null;
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? 'admin';
$active = isset($_POST['active']) ? 1 : 0;

$sql = "UPDATE admin_users SET username = :username, email = :email, role = :role, active = :active WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':role', $role);
$stmt->bindParam(':active', $active);

$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$stmt->bindParam(':password', $hashed_password);

$stmt->execute();
