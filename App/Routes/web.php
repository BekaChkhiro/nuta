<?php

use App\Classes\Router;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use App\Controllers\ProductsController;
use App\Controllers\ShopController;

$router = new Router;

$router->addRoute('/', new HomeController, 'index');
$router->addRoute('/contact', new ContactController, 'contact');
$router->addRoute('/about', new ContactController, 'about');
$router->addRoute('/category', new ContactController, 'category');
$router->addRoute('/products', new ProductsController, 'products');
$router->addRoute('/add', new ProductsController, 'add');
$router->addRoute('/edit', new ProductsController, 'edit');
$router->addRoute('/delete', new ProductsController, 'delete');
$router->addRoute('/shop', new ShopController, 'Shop');

$router->dispatch();
