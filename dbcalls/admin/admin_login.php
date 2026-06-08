<?php
include("../dbcalls/conn.php");

$sql = "SELECT * FROM admins WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $admin_username);
$stmt->execute();
$admin = $stmt->fetch();
