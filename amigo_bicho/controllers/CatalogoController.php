<?php
class CatalogoController {
    private $db;
    private $animalModel;

    public function __construct($db) {
        $this->db = $db;
        $this->animalModel = new AnimalModel($db);
    }

    public function index() {
        $animais = $this->animalModel->listarAnimaisComArquivo();
        include '../amigo_bicho/views/catalago/index.php';
    }
}