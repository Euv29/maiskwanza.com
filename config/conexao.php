<?php

$conexao = mysqli_connect('localhost', 'root', '', 'maiskwanza_bd');

if ($conexao->connect_error) {
    die('Falha ao conectar: ' . $conexao->connect_error);
}

?>