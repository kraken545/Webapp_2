<?php

$sql = "SELECT 
    o.orderid, o.quantity, o.Sum, o.orderdate,
    u.firstname, u.lastname, u.email,
    t.tripid, t.startdate, t.duration,
    l.city, l.country
FROM orders o
INNER JOIN users u ON o.userid = u.userid
INNER JOIN trips t ON o.tripid = t.tripid
INNER JOIN locations l ON t.locationid = l.locationid
ORDER BY o.orderid DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$all_bookings = $stmt->fetchAll();
