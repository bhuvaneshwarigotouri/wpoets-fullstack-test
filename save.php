<?php

require 'config.php';

$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME,
    DB_USER,
    DB_PASS
);

$image = $_FILES['image']['name'];

move_uploaded_file(
    $_FILES['image']['tmp_name'],
    'assets/images/'.$image
);

$stmt = $pdo->prepare("
INSERT INTO slides
(tab_title, slide_title, slide_description, image)
VALUES (?,?,?,?)
");

$stmt->execute([
    $_POST['tab_title'],
    $_POST['slide_title'],
    $_POST['slide_description'],
    $image
]);

header("Location:index.php");
