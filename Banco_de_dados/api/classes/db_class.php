<?php

    class DB {
        public static function connect (){
            $host = 'localhost'; // Endereço do banco de dados
            $port = '5432'; // Porta padrão do PostgreSQL
            $user = 'postgres'; // Usuário do banco
            $pass = 'senha'; // Senha do banco
            $base = 'CRUD_PHP'; // Nome do banco de dados

            return new PDO("pgsql:host={$host};port={$port};dbname={$base};", $user, $pass);
        }
    }