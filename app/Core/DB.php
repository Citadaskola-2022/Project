<?php

namespace App\Core;

class DB
{
    private static ?self $instance = null;
    private \PDO $pdo;

    private function __construct()
    {
        $dbFile = __DIR__ . '/../../db/mysqlitedb.db';
        $this->pdo = new \PDO('sqlite:' . $dbFile);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getPDO(): \PDO
    {
        return $this->pdo;
    }
}