<?php

require 'functions.php';
//require 'router.php';

$dsn = "pgsql:host=localhost;port=5432;dbname=restaurant;options='--client_encoding=utf8'";

$pdo = new PDO($dsn, 'postgres', 'changeme');

$statement = $pdo->prepare('select * from products');
$statement->execute();

$products = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {
    echo "<li>" . $product['name'] . '</li>';
}
