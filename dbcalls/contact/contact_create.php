<?php
/**
 * Contact - CREATE Operation

 */

include('../conn.php');


$naam = $_POST['naam'];
$adres = $_POST['adres'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$message = $_POST['message'];


$sql = "INSERT INTO contacts (naam, adres, email, telefoon, message) 
                VALUES (:naam, :adres, :email, :telefoon, :message)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':adres', $adres);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefoon', $telefoon);
$stmt->bindParam(':message', $message);

$stmt->execute();

