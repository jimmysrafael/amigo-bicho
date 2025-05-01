<?php
class FormularioController {
    private $db;
    private $arquivoModel;
    private $animalModel;

    public function __construct($db) {
        $this->db = $db;
        $this->arquivoModel = new ArquivoModel($db);
        $this->animalModel = new AnimalModel($db);
    }

    public function processarFormulario() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = $_POST;
            $foto = $_FILES['foto_pet'] ?? null;

            if ($foto) {
                $idArquivo = $this->arquivoModel->uploadFoto($foto);

                if ($idArquivo) {
                    $resultado = $this->animalModel->cadastrarAnimal($idArquivo, $dados);

                    if ($resultado) {
                        $_SESSION['mensagem'] = ['tipo' => 'sucesso', 'texto' => 'Cadastro realizado com sucesso!'];
                    } else {
                        $_SESSION['mensagem'] = ['tipo' => 'erro', 'texto' => 'Erro ao cadastrar o animal!'];
                    }
                } else {
                    $_SESSION['mensagem'] = ['tipo' => 'erro', 'texto' => 'Erro ao fazer upload da imagem!'];
                }
            } else {
                $_SESSION['mensagem'] = ['tipo' => 'erro', 'texto' => 'Nenhuma imagem enviada!'];
            }

            header('Location: ../amigo_bicho/views/formulario/index.php');
            exit;
        }
    }
}

?>