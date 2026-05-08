// login_update.php
<?php
/**
 * Update an admin user
 * Place in: /dbcalls/login/update.php
 */
include('../conn.php');

$id = $_POST['id'] ?? null;
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';
$role = $_POST['role'];
$active = 1;

$sql = "UPDATE admin_users SET
                username = :username,
                email = :email,
                password = :password,
                role = :role,
                active = :active
        WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':role', $role);
$stmt->bindParam(':active', $active);

$stmt->execute();
