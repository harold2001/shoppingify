<?php
require($_SERVER["DOCUMENT_ROOT"] . "/src/Model/Category.php");
require($_SERVER["DOCUMENT_ROOT"] . "/src/Model/Listname.php");
// require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");


class Controller
{
    public function index()
    {
        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/Model/ListnameProduct.php");
        $objLP = new ListnameProduct();
        $listnameProducts = $objLP->where(2);

        $obj2 = new Listname();
        $listnames = $obj2->all();

        $sorted = [];

        foreach ($listnames as $listname) {
            $listnameProducts = $objLP->where($listname["id_listname"]);
            $sorted[$listname["name_listname"]] = $listnameProducts;
        }
        include $_SERVER["DOCUMENT_ROOT"] . "/src/view/home.php";
    }
}
