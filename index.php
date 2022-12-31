<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$products = $db->query('select * from products')->fetchAll();

foreach ($products as $product) {
    echo "<li>" . $product['name'] . '</li>';
}
