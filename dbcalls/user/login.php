<?php
include('../conn.php');

$sql_user = "SELECT * FROM users WHERE email = :email";
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bindParam(':email', $username_input);
$stmt_user->execute();
$user = $stmt_user->fetch();
