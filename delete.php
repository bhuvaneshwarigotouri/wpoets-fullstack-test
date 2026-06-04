<?php

require 'config.php';

$id = $_GET['id'];

$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME,
    DB_USER,
    DB_PASS
);

$stmt = $pdo->prepare(
"DELETE FROM slides WHERE id=?"
);

$stmt->execute([$id]);

header("Location:index.php");
