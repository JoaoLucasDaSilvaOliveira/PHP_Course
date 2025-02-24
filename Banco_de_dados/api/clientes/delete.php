<?php

    if ($action === '' && $param === ''){
        echo json_encode(['Error' => 'Caminho não encontrado']);
    }
    if ($action == 'delete'&& $param == ''){
        echo "É necessário informar um cliente";
    }
    if ($action == 'delete'&& $param != ''){
        try{
            $db = DB::connect();
            $rs = $db->prepare("DELETE FROM cliente WHERE ID_CLIENTE = :id");
            $rs->bindParam(':id', $param, PDO::PARAM_INT);
            $exec = $rs->execute();
            if ($exec) {
                echo json_encode(["data"=> "Dados excluídos com sucesso"]);
            } else {
                echo json_encode(["error"=> "Houve um erro na exlclusão, consulte log"]);
            }
        } catch(PDOException $e){
            echo  $e -> getMessage();
        }
    }