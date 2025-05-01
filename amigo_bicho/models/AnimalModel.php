<?php
class AnimalModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function cadastrarAnimal($idArquivo, $dados) {
        $nome = $dados['nome'];
        $raca = $dados['raca'];
        $endereco = $dados['endereco'];
        $dataAtual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO animal (id_arquivo, nome_pet, raca_pet, nome_doador, endereco, data) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('isssss', $idArquivo, $nome, $raca, $nome, $endereco, $dataAtual);

        return $stmt->execute();
    }
}
?>