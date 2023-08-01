<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

class Listname
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DB;
    }

    public function all()
    {
        $stmt = $this->connection->pdo->query("SELECT * FROM listnames");
        $listnames = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $listnames[] = $row;
        }

        return $listnames;
    }
}
