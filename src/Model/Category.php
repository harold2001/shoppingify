<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

class Category
{
    public function all()
    {
        $connection = new DB();
        $stmt = $connection->pdo->query("SELECT * FROM categories");
        $categories = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row;
        }

        return $categories;
    }
}
