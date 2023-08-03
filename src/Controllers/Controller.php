<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/Category.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/Listname.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/ListnameProduct.php");
// require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");


class Controller
{
    public function index()
    {
        $listnameProduct = new ListnameProduct();

        $listname = new Listname();
        $listnames = $listname->all();

        $sorted = [];

        foreach ($listnames as $listname) {
            $listnameProducts = $listnameProduct->where($listname["id_listname"]);
            $sorted[$listname["name_listname"]] = $listnameProducts;
        }
        include $_SERVER["DOCUMENT_ROOT"] . "/src/view/home.php";
    }

    public function create() {
        var_dump($_POST);
    }
}
