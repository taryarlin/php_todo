<?php

$id = $_REQUEST['id'];

$db = new PDO('mysql:dbhost=localhost;dbname=php_todo', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "delete from todos where id = :id";

$statement = $db->prepare($sql);

$statement->execute([
    ':id' => $id,
]);

header("location: /list.php");
exit();
