<?php
require($_SERVER["DOCUMENT_ROOT"] . "/src/Model/Category.php");
// require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");


class Controller
{
    public function index()
    {
        $class = new Category();
        $categorias = $class->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/src/view/home.php";
    }
}
