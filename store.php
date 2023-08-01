<?php

// $title = $_POST['title'];
// $description = $_POST['description'];

$title = trim($_POST['title']);
$description = trim($_POST['description']);

if(strlen($title) <= 0 && strlen($description) <= 0) {
    header("location: /");
    exit();
}

$db = new PDO('mysql:dbhost=localhost;dbname=php_todo', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "insert into todos (title, description) values (:title, :description)";

$statement = $db->prepare($sql);

$statement->execute([
    ":title" => $title,
    ":description" => $description
]);

header("location: /list.php");
exit();
