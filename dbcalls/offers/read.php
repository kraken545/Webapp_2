<?php

$sql = "SELECT t.tripid, t.price, t.startdate, t.duration,

       a.name, a.type, a.image,

       f.departure,

       l.city, l.country

FROM trips t

LEFT JOIN accommodations a ON t.accommodationid = a.accommodationid

LEFT JOIN flights f ON t.flightid = f.flightid

INNER JOIN locations l ON t.locationid = l.locationid;";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();