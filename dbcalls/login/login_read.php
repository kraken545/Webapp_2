// login_read.php
<?php
/**
 * Read admin user information
 * Place in: /dbcalls/login/read.php
 */
include('../conn.php');



$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$user = $stmt->fetchAll();
