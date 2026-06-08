<?php


$sql = "SELECT userid, `firstname`, `lastname`, `email`, `phone`, role FROM users";

$stmt = $conn->prepare($sql);
$stmt->execute();
$all_users = $stmt->fetchAll();

