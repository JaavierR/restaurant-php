<?php

$heading = 'Producto';

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$product = $db->query(
    'SELECT * FROM products WHERE id = :id', [
        'id' => $_GET['id'],
    ]
)->fetch();

if (!$product) {
    abort();
}

$currentUserId = 1;

if ($product['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require 'views/product.view.php';