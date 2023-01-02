<?php

$heading = 'Productos';

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$products = $db->query('SELECT * FROM products WHERE user_id = 1')->fetchAll();

require 'views/products.view.php';