<?php
    require "../connection.php";
    
  
        
        $conn = $GLOBALS['mysql'];
        $id = $_POST['data_id']; 

        
            
            $sql = " DELETE FROM users WHERE id =  '$id' ";
            echo $sql;
            return $sql;
            $res = $conn->query($sql);
                if ($res) {
                    echo $sql;
                } else {
                    echo "Error updating record: " . $conn->error;
                }
        
        
    