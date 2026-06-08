<?php



$sql = "INSERT INTO users (userid, firstname, lastname, email, phone, password, role) VALUES (:userid, :firstname, :lastname, :email, :phone, :password, 'user')";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':userid', $userid);    
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':password', $hashed_password);

$signup_success = $stmt->execute();
