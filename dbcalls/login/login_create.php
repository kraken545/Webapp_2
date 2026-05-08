
<?php
/**
 * Create a new admin user
 * Place in: /dbcalls/login/create.php
 */
include('../conn.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];
$active = 1;

$sql = "INSERT INTO users (username, email, password, role, active)
        VALUES (:username, :email, :password, :role, :active)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':role', $role);
$stmt->bindParam(':active', $active);
$stmt->execute();