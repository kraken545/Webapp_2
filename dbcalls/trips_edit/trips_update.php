<?php

include('../conn.php');

$tripid = $_POST['tripid'];
$maxpersons = $_POST['maxpersons'];
$price = $_POST['price'];
$startdate = $_POST['startdate'];
$duration = $_POST['duration'];
$description = $_POST['description'];
$flightid = $_POST['flightid'];
$accommodationid = $_POST['accommodationid'];
$locationid = $_POST['locationid'];


$sql_update = "UPDATE trips 
               SET maxpersons = :maxpersons, 
                   price = :price, 
                   startdate = :startdate, 
                   duration = :duration, 
                   description = :description, 
                   flightid = :flightid, 
                   accommodationid = :accommodationid, 
                   locationid = :locationid 
               WHERE tripid = :tripid";

$stmt_update = $conn->prepare($sql_update);

$stmt_update->bindParam(':maxpersons', $maxpersons);
$stmt_update->bindParam(':price', $price);
$stmt_update->bindParam(':startdate', $startdate);
$stmt_update->bindParam(':duration', $duration);
$stmt_update->bindParam(':description', $description);
$stmt_update->bindParam(':flightid', $flightid);
$stmt_update->bindParam(':accommodationid', $accommodationid);
$stmt_update->bindParam(':locationid', $locationid);
$stmt_update->bindParam(':tripid', $tripid);

$update_success = $stmt_update->execute();

