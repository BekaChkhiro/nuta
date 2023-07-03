<?php

namespace App\Controllers;

class ProductsController
{
    public function db()
    {
        return (new \PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'root', ''));
    }

    public function products()
    {


        $categories =  $this->db()->prepare('SELECT * FROM products');
        $categories->execute();

        $products = $categories->fetchAll(\PDO::FETCH_OBJ);

        foreach ($products as $product) {
            echo 'Product ID: ' . $product->id;
            echo '<br>Product Title: ' . $product->title;
            echo '<br>Product Title: ' . $product->price;
            echo '<br>Product Title: ' . $product->category_id;
            echo '<a href="edit?id=' . $product->id . '">Edit</a><hr>';
        }
    }

    public function edit()
    {
        $id = intval($_GET['id']);
        if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['category_id'])) {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $category = $_POST['category_id'];

            $run = $this->db()->prepare('UPDATE products SET title = ?, price = ?, category_id = ? WHERE id = ?');
            $run->execute([$title, $price, $category, $id]);

            header('location: /Beka/products');
        }

        $records = $this->db()->prepare('SELECT * FROM products WHERE id = ?');
        $records->execute([$id]);

        $row = $records->fetch(\PDO::FETCH_OBJ);

        include VIEWS . '/edit_form.php';
    }

    public function add()
    {
        if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['category_id'])) {
            $title = $_POST['title'];
            $price = $_POST['price'];
            $category = $_POST['category_id'];

            $run = $this->db()->prepare('INSERT INTO `products` (`title`, `price`, `category_id`) VALUES ( ?, ?, ?);');
            $run->execute([$title, $price, $category]);

            header('location: /Beka/products');
        }

        include VIEWS . '/add_form.php';
    }
}
