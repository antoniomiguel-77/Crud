<?php

function select($tabela){

    $pdo = conectar();
    $sql = "select * from $tabela;";
    $listar = $pdo->prepare($sql);
    $listar->execute();

    return $listar->fetchAll();
}