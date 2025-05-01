<?php
include_once './config/Database.php';
include_once './models/ArquivoModel.php';
include_once './models/AnimalModel.php';
include_once './controllers/FormularioController.php';

$db = (new Database())->getConnection();

if (isset($_GET['action']) && $_GET['action'] == 'processarFormulario') {
    $controller = new FormularioController($db);
    $controller->processarFormulario();
} else {
    include './views/formulario/index.php';
}
?>