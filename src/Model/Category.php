<?php

class Category
{
    public function all()
    {
        require_once($_SERVER["DOCUMENT_ROOT"] . "/connection.php");
        $stmt = $pdo->query("SELECT * FROM categories");
        $categories = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row;
        }

        return $categories;
    }
}
