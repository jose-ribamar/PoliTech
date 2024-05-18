<?php
$mysqli = new mysqli('localhost', 'root', '', 'politech');

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}
?>
