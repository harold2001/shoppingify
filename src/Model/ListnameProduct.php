<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

class ListnameProduct
{
    public $connection;

    public function __construct()
    {
        $this->connection = new DB;
    }

    public function all()
    {
        $query = "
        select
            *
        from 
            listname_products lp
        inner join products p on
            lp.product_id = p.id_product
        inner join listnames l on
            lp.listname_id = l.id_listname
        ";

        $stmt = $this->connection->pdo->query($query);
        $rows = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function where($id)
    {
        $query = "
        select
            *
        from
            listname_products lp
        inner join products p on
            lp.product_id = p.id_product
        inner join listnames l on
            lp.listname_id = l.id_listname
        where lp.listname_id = $id;
        ";

        $stmt = $this->connection->pdo->query($query);
        $rows = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }
}
