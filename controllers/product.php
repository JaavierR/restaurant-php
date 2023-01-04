<?php

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$heading = 'Producto';
$currentUserId = 1;

$product = $db->query(
    'SELECT * FROM products WHERE id = :id', [
        'id' => $_GET['id'],
    ]
)->findOrFail();


authorize($product['user_id'] === $currentUserId);

require 'views/product.view.php';