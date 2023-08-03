<?php
require_once(__DIR__ . "/src/Controllers/Controller.php");

$controller = new Controller();

if (isset($_GET["action"])) {
    $action = $_GET["action"];

    switch ($action) {
        case "create_listnameProduct":
            $controller->create();
            break;

        default:
            echo "No existe";
            break;
    }
} else {
    $controller->index();
}
