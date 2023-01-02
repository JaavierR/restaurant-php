<?php

$heading = 'Producto';

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$product = $db->query(
    'SELECT * FROM products WHERE id = :id',
    ['id' => $_GET['id']]
)->fetch();

require 'views/product.view.php';