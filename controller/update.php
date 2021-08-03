<?php
    require "../connection.php";
    
    
    if(isset($_POST['updateData'])) {
    
        $conn = $GLOBALS['mysql'];
        
        $id = $_POST['id'];
        $name = $_POST['nome'];
        $date = $_POST['data'];
        $indirizzo = $_POST['indirizzo'];
        $email = $_POST['email'];
        $tipo = $_POST['tipo'];
        $attivo = $_POST['attivo'];
        $sql = "UPDATE `users` 
        SET `name`='$name',
        `email`='$email',
        `indirizzo`='$indirizzo',
        `data`='$date',
        `attivo`='$attivo',
        `tipo`='$tipo' WHERE id=$id";
      
        var_dump($sql);
        $res = $conn->query($sql);
        
        if ($res) {
            echo json_encode(array("statusCode"=>200));

        } else {  
            echo "Error updating record: " . $conn->error;
        }
        mysqli_close($conn);

    }
