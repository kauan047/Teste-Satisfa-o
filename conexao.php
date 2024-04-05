<?php
$dsn = "mysql:host=seu_host;dbname=avaliacao";
$usuario = "root";


try {
    $avaliacao = new PDO("mysql:host=127.0.0.1;port=3306;dbname=avaliacao","root","");
    $avaliacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO pesquisa_satisfacao (nome_cliente, data_pesquisa, total_pontos, grau_satisfacao)
              VALUES (:nome, :data, :pontos, :grau)";
    $stmt = $avaliacao->prepare($query);

    
    $stmt->execute([
        'nome' => $nome_cliente,
        'data' => $data_pesquisa,
        'pontos' => $pontos,
        'grau' => $grau_satisfacao
    ]);

    echo "Dados inseridos com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>