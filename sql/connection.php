<?php

$config  = require "config.php";

$mysql = new mysqli(
    $config["mysql_host"],
    $config["mysql_username"],
    $config["mysql_password"],
    $config["mysql_db"]
);

if ($mysql->connect_error) {
    echo "Erro: " . $mysql -> connect_error;
    exit();
}