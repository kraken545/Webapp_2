<?php
/**
 * Contact - UPDATE Operation
 * Place in: /dbcalls/contact/update.php
 * Updates contact information
 */

include('../conn.php');


$id = $_POST['id'] ?? null;
$naam = $_POST['naam'] ?? '';
$adres = $_POST['adres'] ?? '';
$email = $_POST['email'] ?? '';
$telefoon = $_POST['telefoon'] ?? '';
$message = $_POST['message'] ?? '';


$sql = "UPDATE contacts SET naam = :naam, adres = :adres, email = :email, 
                telefoon = :telefoon, message = :message WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':adres', $adres);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefoon', $telefoon);
$stmt->bindParam(':message', $message);

$stmt->execute();


