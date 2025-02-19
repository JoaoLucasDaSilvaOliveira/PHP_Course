<?php

if ($action === '' && $param === ''){
    echo json_encode(['Error' => 'Caminho não encontrado']);
}
if ($action == 'update'&& $param == ''){
    echo json_encode(['Error' => '"É necessário informar um cliente"']);
}
if ($action == 'update'&& $param != ''){
    array_shift($_POST);
    $campos = [];
    $valores = [];

    $sql = "UPDATE cliente SET ";

    foreach ($_POST as $indice => $valor) {
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
    $sql = "UPDATE cliente SET " . implode(", ", $campos) . " WHERE ID_CLIENTE = :id";
    $valores[":id"] = $param;
    try {
        $db = DB::connect();
        $rs = $db->prepare($sql);
        $exec = $rs->execute();
        if ($exec){
            echo json_encode(["data"=> "Dados atualizados com sucesso"]);
        } else {
            echo json_encode(["error"=> "Algum erro ocorreu no insert de dados"]);
        }
    } catch (PDOException $e) {
            echo  $e->getMessage() ;
    }
}