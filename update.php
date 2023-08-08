<?php

$db = new PDO('mysql:dbhost=localhost;dbname=php_todo', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$title = trim($_POST['title']);
$description = trim($_POST['description']);
$id = $_GET['id'];

$sql = "update todos set title=:title, description=:description where id=:id";

$statement = $db->prepare($sql);

$statement->execute([
    ':title' => $title,
    ':description' => $description,
    ':id' => $id,
]);

header("location: /list.php");
exit();
