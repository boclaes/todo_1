<?php

declare(strict_types=1);
include "database.php";

$statment = $connection->prepare("INSERT INTO todo (name, details, deadline) VALUES (:name, :details, :deadline)");
$statment->bindParam(":name", $_POST["name"]);
$statment->bindParam(":details", $_POST["details"]);
$statment->bindParam(":deadline", $_POST["deadline"]);
$statment->execute();
header("Location: http://website.int/");

?>