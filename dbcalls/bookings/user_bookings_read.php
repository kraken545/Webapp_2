<?php


$userid = $_SESSION['user_id'];

$sql = "SELECT 
    o.orderid, o.quantity, o.Sum, o.orderdate,
    t.tripid, t.startdate, t.duration, t.maxpersons, t.price,
    l.city, l.country
FROM orders o
INNER JOIN trips t ON o.tripid = t.tripid
INNER JOIN locations l ON t.locationid = l.locationid
WHERE o.userid = :userid
ORDER BY o.orderid DESC";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':userid', $userid);
$stmt->execute();
$user_bookings = $stmt->fetchAll();
