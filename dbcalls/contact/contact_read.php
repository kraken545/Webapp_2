<?php
/**
 * Contact - READ Operation
 * Place in: /dbcalls/contact/read.php
 * Retrieves contact messages
 */

include('../conn.php');



$sql = "SELECT * FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$contacts = $stmt->fetchAll();