<?php
/**
 * Admin Users - READ Operation

 */

include('../conn.php');

$id = $_GET['id'] ?? null;


$sql = "SELECT id, username, email,created_at FROM admin_users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$user = $stmt->fetchAll();

