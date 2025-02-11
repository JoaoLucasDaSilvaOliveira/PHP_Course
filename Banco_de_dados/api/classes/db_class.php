<?php

    class DB {
        public static function connect (){
            $host = 'localhost';
            $user = 'root';
            $pass = 'meu1Sequel';
            $base = 'crud';

            return new PDO("mysql:host={$host};dbname={$base};charset=UTF8;", $user);
        }
    }