<?php
require "../connection.php";
function delete(int $id) {
    $conn = $GLOBALS['mysql'];
    $sql = "DELETE FROM users WHERE id = .$id";
    $conn->query($sql);
    $res = delete($id);

    $message = $res ? 'User Deleted' : 'Error deleteing';
    $_SESSION['message'] = $message;
    $_SESSION['success'] = $res;
    header('location: ../index.php');
}