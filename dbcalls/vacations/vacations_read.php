<?php

include('../conn.php');


$id = $_GET['id'] ?? null;

$sql = "SELECT * FROM vacations WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$vacation = $stmt->fetchAll();
