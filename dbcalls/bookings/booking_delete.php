<?php
session_start();
include('../conn.php');

$orderid = $_POST['delete_bookingid'];

$sql = "DELETE FROM orders WHERE orderid = :orderid";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':orderid', $orderid);
$stmt->execute();

header('Location: ../../private/admin.php');
exit;
