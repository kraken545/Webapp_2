<?php
session_start();
include('../conn.php');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO reviews (name, email, subject, review) VALUES (:name, :email, :subject, :review)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':subject', $subject);
$stmt->bindParam(':review', $message);
$review = $stmt->execute();

header("Location: ../../index.php");
