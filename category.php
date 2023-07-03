<?php

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$title = isset($_GET['title']) ? trim($_GET['title']) : '';

$db = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'root', '');

$categories =  $db->prepare('SELECT * FROM products');
$categories->execute([$id]);

$category = $categories->fetch(PDO::FETCH_OBJ);

if ($categories->rowCount() == 0) {
    header('location: /home');
    exit;
}
foreach ($category as $item) {
    echo 'Category ID: ' . $item->id;

    echo '<br>Category Title: ' . $item->title;
}
