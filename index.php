<?php
declare(strict_types=1);
include "database.php";
$stmt = $connection->query("SELECT * FROM todo")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>TODO</th>
        <?php foreach($stmt as $row):?>
        </tr>
        <tr>
        <?php if ($row["completed"] == 0):?>
            <td><?=$row["id"]?></td>
            <td><a href="details.php?id=<?=$row['id'];?>"><?=$row['name'];?></a></td>
            <td><form method="POST" action="completed.php"><input type="hidden" value= <?=$row['id']?> name="id"><input type="submit" value="completed"></form></td>
            <td><form method="POST" action="delete.php"><input type="hidden" value= <?=$row['id']?> name="id"><input type="submit" value="Delete"></form></td>
        <?php else: ?>
            <td><?=$row["id"]?></td>
            <td><a href="details.php?id=<?=$row['id'];?>"><s><?=$row['name'];?></s></a></td>
            <td><form method="POST" action="delete.php"><input type="hidden" value= <?=$row['id']?> name="id"><input type="submit" value="Delete"></form></td>
        </tr>
    <?php endif; endforeach;?>
    <a href="form.php">
        <button>Add Todo</button>
</table>
</body>
</html>