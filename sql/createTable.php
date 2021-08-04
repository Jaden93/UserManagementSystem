<?php

require "../sql/connection.php";
$conn = $GLOBALS['mysql'];

$sql = "CREATE TABLE `sdf` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NOT NULL,
	`tipo` ENUM('nessuno','individuale','collettivo') NOT NULL DEFAULT 'individuale',
	`indirizzo` VARCHAR(50) NOT NULL,
	`data` DATE NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`attivo` SMALLINT NOT NULL,
	UNIQUE INDEX `email` (`email`),
	PRIMARY KEY (`id`)
)";

$res = $conn->query($sql);
    if ($res) {
        echo "CREAZIONE AVVENUTA CON SUCCESSO";
    } else {
        echo "errore: ". $conn->error;
    }
?>