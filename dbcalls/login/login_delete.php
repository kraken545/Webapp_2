<?php
/**
 * Delete an admin user
 * Place in: /dbcalls/login/delete.php
 */
include('../conn.php');

$id = $_GET['id'] ?? null;

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

$stmt->execute();

