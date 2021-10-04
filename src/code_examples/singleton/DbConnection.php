<?php

class DbConnection
{
    private static ?DbConnection $instance = null;
    private ?PDO $connection = null;

    private function __construct(string $dsn, string $user = "", string $password = "")
    {
        try {
            $this->setConnection(new PDO($dsn, $user, $password));
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
        echo "<p>New DB connexion</p>";
    }

    public function getConnection(): ?PDO
    {
        return $this->connection;
    }

    public function setConnection(?PDO $connection): void
    {
        $this->connection = $connection;
    }

    public static function getInstance(string $dsn = "", string $user = "", string $password = ""): DbConnection
    {
        if (!self::$instance) {
            self::$instance = new DbConnection($dsn, $user, $password);
        }
        return self::$instance;
    }
}