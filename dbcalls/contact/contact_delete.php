<?php
/**
 * Contact - DELETE Operation
 * Place in: /dbcalls/contact/delete.php
 * Removes contact records
 */

include('../conn.php');


$id = $_GET['id'] ?? $_POST['id'] ?? null;



$sql = "DELETE FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();



