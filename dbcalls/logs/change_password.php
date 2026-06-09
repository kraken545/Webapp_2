<?php

$sql = "UPDATE users SET password = :password WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':password', $hashed_password);
$stmt->bindParam(':email', $email);
$change_success = $stmt->execute();
