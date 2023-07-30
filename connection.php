<?php
// Get the environment variables with the data of the conexion to the database.

$envFile = __DIR__ . "/.env";

if (file_exists($envFile)) {
    $envVariables = parse_ini_file($envFile);
    foreach ($envVariables as $key => $value) {
        $_ENV[$key] = $value;
    }
} else {
    die(".env file not found");
}

class DB
{
    public $pdo;

    public function __construct()
    {
        // Try the connection and catch the error.
        try {
            $host = $_ENV["DB_HOST"];
            $username = $_ENV["DB_USERNAME"];
            $password = $_ENV["DB_PASSWORD"];
            $dbname = $_ENV["DB_DATABASE"];
            $port = $_ENV["DB_PORT"];
            $attributes = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
            $this->pdo = new PDO($dsn, $username, $password, $attributes);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function disconnect()
    {
        $this->pdo = null;
    }
}
