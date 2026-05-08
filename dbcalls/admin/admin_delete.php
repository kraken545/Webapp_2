<?php
/**
 * Admin Users - DELETE Operation

 */

include('../conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM admin_users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();



