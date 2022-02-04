<?php

$hostname = "localhost";
$bancodedados = "blog"
$usuario = "root";
$senha = "";

$mysql = new mysql($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>