<?php

class Database
{
    public PDO $connection;
    public PDOStatement $statement;

    public function __construct(array $config, string $username = 'root', string $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query(string $query, array $params = []): static
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get(): array
    {
        return $this->statement->fetchAll();
    }

    public function find(): array | bool
    {
        return $this->statement->fetch();
    }

    public function findOrFail(): array
    {
        $result = $this->find();

        if (!$result) {
            abort(Response::NOT_FOUND);
        }

        return $result;
    }
}
