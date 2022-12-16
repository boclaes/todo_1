<?php
declare(strict_types=1);

$databaseHost = "127.0.0.1";
$databaseName = "test";
$databaseUser = "root";
$databasePw = "";

try{
    $connection = new PDO(
        'mysql:host=' . $databaseHost . ';dbname=' . $databaseName,
        $databaseUser,
        $databasePw
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(\Exception $exception){
    echo $exception->getMessage();
}