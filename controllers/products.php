<?php

$heading = 'Productos';

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$products = $db->query('SELECT * FROM products WHERE user_id = 1')->get();

require 'views/products.view.php';