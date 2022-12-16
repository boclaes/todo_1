<?php
declare(strict_types=1);
include "database.php";

$update = $connection->prepare("UPDATE todo SET completed = 1 WHERE id = :id");
$update->bindParam(":id", $_POST['id']);
$update->execute();
header("Location: http://website.int/");
