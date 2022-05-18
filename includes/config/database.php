<?php
    function conectarDB() : mysqli {
        $hostname=$_ENV['DB_HOST'];
        $username=$_ENV['DB_USER'];
        $password=$_ENV['DB_PASSWORD'];
        $database=$_ENV['DB_BD'];
        $db= new mysqli($hostname,$username,$password,$database);

        if(!$db){
            echo "No se conecto";
            exit;
        }
        //para poder visualizar los acentos correctamente
        $db->set_charset("utf8");
        return $db;
    }