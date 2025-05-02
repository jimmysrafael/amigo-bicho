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
        $telefone = $dados['telefone'];
        $dataAtual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO animal (id_arquivo, nome_pet, raca_pet, nome_doador, endereco, telefone, data) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('isssss', $idArquivo, $nome, $raca, $nome, $endereco, $telefone, $dataAtual);

        return $stmt->execute();
    }

    public function listarAnimaisComArquivo() {
        $sql = "SELECT a.*, ar.path FROM animal a 
                JOIN arquivos ar ON a.id_arquivo = ar.id
                ORDER BY a.data DESC";
    
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
}
?>