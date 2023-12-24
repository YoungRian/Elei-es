<?php
    $endereco = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'db_eleicao';
    $porta = '3306';
    
    $conexao = new mysqli($endereco, $usuario, $senha, $banco, $porta);
    if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
    exit();
}

?>

