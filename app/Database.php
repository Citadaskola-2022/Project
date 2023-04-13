<?php

namespace App;

use PDO;

class Database {
    private static ?Database $instance = null;
    public $connection;

    private function __construct()
    {
        $config = [
            'host' => 'db',
            'port' => '3306',
            'dbname' => $_ENV['DB_NAME'],
            'charset' => 'utf8mb4',
        ];

        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO(
            $dsn,
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD'],
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
