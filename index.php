<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

$config = require 'config.php';
$db = new Database($config['database'], 'mysql', 'changeme');

$id = $_GET['id'] ?? null;
$query = 'select * from products where id = :id';
$products = $db->query($query, ['id' => $id])->fetchAll();

foreach ($products as $product) {
    echo "<li>" . $product['name'] . '</li>';
}
