<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-type: application/json');

    date_default_timezone_set('America/Sao_Paulo');

    if (isset(($_GET['path']))) {
        $path = explode('/', $_GET['path']);
    } else {
        echo 'Caminho não existe';
        exit;
    }
    if (isset($path[0])) {
        $api = $path[0];
    } else {
        echo 'Caminho não encontrado';
        exit;
    }
    if (isset($path[1])) {
        $action = $path[1];
    } else {
        $action = '';
    }
    if (isset($path[2])) {
        $param= $path[2];
    } else {
        $param = '';
    }

    $method = $_SERVER['REQUEST_METHOD'];

    include_once 'classes/db_class.php';
    include_once './clientes/clientes.php';