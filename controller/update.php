<?php

    require "../sql/connection.php";
    $conn = $GLOBALS['mysql'];

    if(!isset($_POST['updateData'])) {
        
        $id = $_POST['update_id'];
        $name = $_POST['update_nome'];
        $date = $_POST['update_data'];
        $indirizzo = $_POST['update_indirizzo'];
        $email = $_POST['update_email'];
        $tipo = $_POST['update_tipo'];
        $attivo = $_POST['update_attivo'];
        

        if ($tipo == "") {
            $tipo = "individuale";
        }
        
        $sql = "UPDATE `users` 
        SET `nome`='$name',
        `tipo`='$tipo',
        `indirizzo`='$indirizzo',
        `data`='$date',
        `email` = '$email',
        `attivo` = '$attivo'
         WHERE id=$id";

        $res = $conn->query($sql);

            if ($res) {
                header('location: ../index.php');
            } else {
                echo "Error updating record: " . $conn->error;
            }
        
        mysqli_close($conn);

    }