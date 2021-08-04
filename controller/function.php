<?php

require "./sql/connection.php";

    function getConfig($param) {

        $config = require "./sql/config.php";
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

            if ($tipo == "") {
                $tipo = "individuale";
            }
            $sql = "INSERT INTO users (nome,email,data,indirizzo,tipo,attivo) VALUES ";
            $sql .= " ('$name','$email','$date','$address','$tipo','$check')";
            $res = $conn->query($sql);

            return header('location: /test/index.php');
            
            
            if (!$res) {
                die($conn->error);
            }
        } 
    }

    function getUser() {

        $conn = $GLOBALS['mysql'];
        $sql = "SELECT * from users";

        $result = [];
        
        $res = $conn->query($sql);
        
        if ($res) {
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
            
        } 
    }

    function updateUser() {
        
        $conn = $GLOBALS['mysql'];
        
        $sql = "UPDATE users SET user=?, password=? WHERE id =  ";

        $res = $conn->query($sql);

        if ($res) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }


