<?php
session_start();
include("../conn.php");

$userid = $_SESSION['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_SESSION['user_phone'];



$sql = "UPDATE users SET firstname = :firstname, lastname = :lastname, 
        email = :email, phone = :phone WHERE userid = :userid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname',  $lastname);
$stmt->bindParam(':email',     $email);
$stmt->bindParam(':phone',     $phone);
$stmt->bindParam(':userid',    $userid);
$update_success = $stmt->execute();

if(isset($update_success)){
    $_SESSION['user_firstname'] = $firstname;
    $_SESSION['user_lastname']  = $lastname;
    $_SESSION['user_email']     = $email;
    header("Location: ../../private/profile.php?edit_info=false");
    exit();
}

