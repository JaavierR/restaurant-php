<?php

class Database
{
    public PDO $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=restaurant;charset=utf8mb4";
        $this->connection = new PDO($dsn, 'mysql', 'changeme');
    }

    public function query(string $query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
