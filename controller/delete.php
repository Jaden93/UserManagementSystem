<?php 
require "../sql/connection.php";



$conn=$GLOBALS['mysql'];
$id=($_POST['data_id']);

$message = "Utente eliminato";

$sql=" DELETE FROM users WHERE id =  '$id' ";

$res=$conn->query($sql);


if ($res) {
    header("location: ../index.php");
    }

    else {
        echo "Error updating record: ". $conn->error;
    }
