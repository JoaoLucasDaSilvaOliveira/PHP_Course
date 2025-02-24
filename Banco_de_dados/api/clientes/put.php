<?php
$dados = json_decode(file_get_contents("php://input"), true);
print_r($dados);

if ($action === '' && $param === '') {
    echo json_encode(['Error' => 'Caminho não encontrado']);
    exit;
}

if ($action == 'update' && empty($param)) {
    echo json_encode(['Error' => '"É necessário informar um cliente"']);
    exit;
}

if ($action == 'update' && !empty($param)) {
    $campos = [];
    $valores = [];

    foreach ($dados as $indice => $valor) {
        if ($indice !== 'ID_CLIENTE') {
            $campos[] = "`$indice` = :$indice";
            $valores[":$indice"] = $valor;
        }
    }

    if (empty($campos)) {
        http_response_code(400);
        echo json_encode(["error" => "Nenhum campo para atualizar"]);
        exit;
    }

    // Query corrigida
    $sql = "UPDATE cliente SET " . implode(", ", $campos) . " WHERE ID_CLIENTE = :ID_CLIENTE";
    print_r($sql); // Depuração: veja se a query está correta

    $valores[":ID_CLIENTE"] = $param;

    try {
        $db = DB::connect();
        $rs = $db->prepare($sql);
        $rs->execute($valores);

        // ✅ Verifica quantas linhas foram afetadas
        if ($rs->rowCount() > 0) {
            echo json_encode(["data" => "Dados atualizados com sucesso"]);
        } else {
            echo json_encode(["error" => "Nenhum registro encontrado para atualização"]);
        }
    } catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
}
    