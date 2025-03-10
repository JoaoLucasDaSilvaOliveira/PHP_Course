<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-type: application/json');

    date_default_timezone_set('America/Sao_Paulo');

    $requestUri = $_SERVER['REQUEST_URI']; // Captura a URL completa

    if (isset($requestUri)) {
        $segments = trim($requestUri, '/'); // Remove barras no começo e final
        $path = explode('/', $segments); // Divide a URL em partes
    } else {
        echo 'Caminho não existe';
        exit;
    }
    if (isset($path[4])) {
        $api = $path[4];
    } else {
        echo 'Caminho não encontrado';
        exit;
    }
    if (isset($path[5])) {
        $action = $path[5];
    } else {
        $action = '';
    }
    if (isset($path[6])) {
        $param= $path[6];
    } else {
        $param = '';
    }
    
    $method = $_SERVER['REQUEST_METHOD'];
    include_once 'classes/db_class.php';
    include_once './clientes/clientes.php';