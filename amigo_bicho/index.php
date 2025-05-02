<?php
include_once './config/Database.php';
include_once './models/ArquivoModel.php';
include_once './models/AnimalModel.php';
include_once './controllers/FormularioController.php';
include_once './controllers/CatalogoController.php';

$db = (new Database())->getConnection();

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'processarFormulario') {
        $controller = new FormularioController($db);
        $controller->processarFormulario();
    } elseif ($_GET['action'] === 'catalogo') {
        $controller = new CatalogoController($db);
        $controller->index();
    }
} else {
    include './views/home/index.html';
}

?>
