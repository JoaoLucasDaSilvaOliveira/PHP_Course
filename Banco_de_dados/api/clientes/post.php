<?php

    if ($action === '' && $param === ''){
        echo json_encode(['Error' => 'Caminho não encontrado']);
    }

    if ($action == 'create' && $param == ''){
        try {
            $db = DB::connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Verifica se há dados para inserir
            if (empty($_POST)) {
                echo json_encode(["error" => "Nenhum dado enviado"]);
                exit;
            }
    
            // Criando os placeholders (:campo1, :campo2, etc.)
            $campos = array_keys($_POST);
            $placeholders = array_map(fn($campo) => ":$campo", $campos);
    
            // Montando a query com segurança
            $sql = "INSERT INTO cliente (" . implode(", ", $campos) . ") VALUES (" . implode(", ", $placeholders) . ")";
            $stmt = $db->prepare($sql);
    
            // Executando a query com valores seguros
            $exec = $stmt->execute($_POST);
    
            if ($exec) {
                echo json_encode(["data" => "Dados inseridos com sucesso"]);
            } else {
                echo json_encode(["error" => "Erro ao inserir dados"]);
            }
        } catch (PDOException $e) {
            echo json_encode(["error" => "Erro no banco de dados"]);
        }
    }