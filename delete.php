<?php
declare(strict_types=1);
include "database.php";

$delete = $connection->prepare("DELETE FROM todo WHERE id = :id");
$delete->bindParam(":id", $_POST['id']);
$delete->execute();
header("Location: http://website.int/");
