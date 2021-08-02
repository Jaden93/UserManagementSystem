<?php

require "connection.php";

    function getConfig($param) {

        $config = require "config.php";
        return array_key_exists($param, $config) ? $config[$param] : null;
    }

    function insertTipo() {

        $tipo = getConfig('tipo');
        return $tipo;
    }

    function insertUser() {
    
        $conn = $GLOBALS['mysql'];
        
      
        if(isset($_POST["check"])) {
            $name = $_POST["nome"]; 
            $email = $_POST["email"]; 
            $address = $_POST["indirizzo"]; 
            $date = $_POST["date"]; 
            $tipo = $_POST["option"]; 
            $check = $_POST["check"];
            if ($check == 0) {
                $check = "NO";
            } else {
                $check = "SI";
            }

            if ($tipo == "") {
                $tipo = "individuale";
            }
            $sql = "INSERT INTO users {nome,email,data,indirizzo,tipo,attivo) VALUES ";
            $sql .= " ($name,$email,$date,$address,$tipo,$check)";
            
        return $sql;
        } 
    }

var_dump(insertUser());    