<?php
include ('../conn.php');

session_start();
$acc_name = $_POST['acc_name'];
$acc_type = $_POST['acc_type'];
$acc_people = $_POST['acc_people'];

$sql = "INSERT INTO accommodations (name, type, peopleamount) VALUES (:name, :type, :peopleamount)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $acc_name);
$stmt->bindParam(':type', $acc_type);
$stmt->bindParam(':peopleamount', $acc_people);
$stmt->execute();

header("Location: ../../private/admin.php");
