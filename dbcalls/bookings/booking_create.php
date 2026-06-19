<?php
session_start();
include("../conn.php");


$price = $_POST['price'];

$quantity = $_POST['persons'];
$tripid = $_POST['tripid'];
$userid = $_SESSION['user_id'];
$Sum = ($price * $quantity);



$sql = "INSERT INTO orders  (orderdate, Sum, quantity, userid, tripid) 
        VALUES ( NOW(), :Sum, :quantity, :userid, :tripid)";


$stmt = $conn->prepare($sql);
$stmt->bindParam(':Sum', $Sum);
$stmt->bindParam(':quantity', $quantity);
$stmt->bindParam(':userid', $userid);
$stmt->bindParam(':tripid', $tripid);
$booking_success = $stmt->execute();

header('Location: ../../private/profile.php');
exit;
