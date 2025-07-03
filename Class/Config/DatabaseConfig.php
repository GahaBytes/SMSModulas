<?php

class DatabaseConfig
{
    private $pdo = null;
    public function integrate(): PDO

{
    if ($this->pdo === null) {
        try {
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "school_management";

            $this->pdo = new PDO (dsn:"ysql:host=$server;dbname="$database", username: $user, password: $password);
                 $this->pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                exit(json_encode([
                    'success' => false,
                    'message' => 'Database connection failed: ' . $e->getMessage()
                ]))
}

}