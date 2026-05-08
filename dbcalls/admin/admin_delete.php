<?php
/**
 * Admin Users - DELETE Operation
 * Place in: /dbcalls/admin/delete.php
 */

include('../conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM admin_users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();



