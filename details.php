<?php
declare(strict_types=1);
include "database.php";

$details = $connection->prepare("SELECT details FROM todo WHERE id=:id");
$details->bindParam(":id", $_GET['id']);
$details->execute();
$users = $details->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Details</h1>
<?php foreach ($users as $user): ?>
<p><?=$user["details"]?></p>
<?php endforeach;?>
<a href="index.php">
    <button>Go Back</button>
</body>
</html>

