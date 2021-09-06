<?php

function existe($tabela,$nome,$snome){
    $pdo = conectar();
    $sql = "select * from $tabela where nome = ? and sobrenome =?";
    $existe = $pdo->prepare($sql);
    $existe->bindValue(1,$nome);
    $existe->bindValue(2,$snome);
    $existe->execute();
    return  $existe->fetchAll();
    
    
}