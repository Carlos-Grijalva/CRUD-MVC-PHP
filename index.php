<?php
include "./controller/controller.php";

$url = $_SERVER['REQUEST_URI'];
$request = $_SERVER['REQUEST_METHOD'];

//Router
switch ($url) {
    case '/speedrun/': Controller::main($request, $_POST); break;
    case '/speedrun/registro/': Controller::registrar($request, $_POST); break;
    case '/speedrun/editarMenu/': Controller::editarMenu($request, $_POST); break;
    case '/speedrun/editar/': Controller::editar($request, $_POST); break;
    case '/speedrun/eliminar/': Controller::eliminar($request, $_POST); break;
    default: Controller::error($request); break;
}

