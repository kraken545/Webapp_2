<?php

    include('../conn.php');

    $locationid = $_GET['locationid'];

    $sql = "DELETE FROM locations WHERE locationid = :locationid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':locationid', $locationid);
    $stmt->execute();

    header('Location: ../../private/admin.php');