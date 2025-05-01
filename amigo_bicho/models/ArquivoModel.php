<?php
class ArquivoModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function uploadFoto($foto) {
        $dataAtual = date('Y-m-d H:i:s');
        $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
        $nome_unico = uniqid('pet_', true) . '.' . $extensao;
        $foto_tmp = $foto['tmp_name'];
        $foto_destino = '../amigo_bicho/uploads/' . $nome_unico;

        if (move_uploaded_file($foto_tmp, $foto_destino)) {
            $sql = "INSERT INTO arquivos (path, data) VALUES (?, ?)";
            $stmt = $this->db->prepare($sql);
            $caminhoArquivo = 'uploads/' . $nome_unico;
            $stmt->bind_param('ss', $caminhoArquivo, $dataAtual);

            if ($stmt->execute()) {
                return $stmt->insert_id; // Retorna o ID do arquivo inserido
            }
        }
        return false;
    }
}
?>