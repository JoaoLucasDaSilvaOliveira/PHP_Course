<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($action === '' && $param === '') {
    echo json_encode(['error' => 'Caminho não encontrado']);
    exit;
}

if ($action == 'create' && $param == '') {
    try {
        $db = DB::connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verifica se há dados para inserir
        $dadosRecebidos = json_decode(file_get_contents("php://input"), true);

        if (!$dadosRecebidos) {
            echo json_encode(["error" => "Nenhum dado enviado"]);
            exit;
        }

        error_log("Dados recebidos: " . print_r($dadosRecebidos, true)); // Log para debug

        // Criando os placeholders (:campo1, :campo2, etc.)
        $campos = array_keys($dadosRecebidos);
        $placeholders = array_map(fn($campo) => ":$campo", $campos);

        $sql = "INSERT INTO cliente (" . implode(", ", $campos) . ") VALUES (" . implode(", ", $placeholders) . ")";
        $stmt = $db->prepare($sql);

        $exec = $stmt->execute($dadosRecebidos);

        if ($exec) {
            echo json_encode(["data" => "Dados inseridos com sucesso"]);
        } else {
            echo json_encode(["error" => "Erro ao inserir dados"]);
        }

        exit;
    } catch (PDOException $e) {
        error_log("Erro PDO: " . $e->getMessage()); // Log para debug
        echo json_encode(["error" => "Erro no banco de dados"]);
        exit;
    }
}
?>
